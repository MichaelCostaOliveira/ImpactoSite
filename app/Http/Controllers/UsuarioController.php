<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');//fazer middleware depois por usuarios / minha conta é liberado
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $registros = DB::table('users')->where('deleted_at', '=', null);

        if (!empty($request->get('nome', ''))) {
             $registros->where('name','like', '%'.$request->nome.'%');
         }
        if (!empty($request->get('email', ''))) {
            $registros->where('email','like', '%'.$request->email.'%');
        }

        $registros=$registros->orderBy('name', 'ASC')->paginate($perPage);


        return view('admin.usuario.listagem.usuario',[
            'title_page' => 'Usuários',
            'registros' => $registros
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function form($users_id)
    {

        $registro = DB::table('users')
            ->where('id', '=', $users_id)
            ->get()->first();

        return view('admin.usuario.form.usuario',[
            'title_page' => 'Usuários',
            'registro' => $registro,
            'options' => [
                'perfil' => $this->getPerfis()
            ]
        ]);
    }

    /**
     * Salvar
     */
    public function formPost($users_id, Request $request)
    {
        $dados["name"] = filter_var($request->get('name'), FILTER_SANITIZE_STRING);
        $dados["email"] = filter_var($request->get('email'), FILTER_SANITIZE_STRING);
        $dados["perfil_id"] = filter_var($request->get('perfil_id'), FILTER_SANITIZE_STRING);
        $password = filter_var($request->get('password'), FILTER_SANITIZE_STRING);
        $dados["created_at"] = now()->toDateTimeString();
        if($password!= ''){
            $dados["password"] = Hash::make($password);
        }

        if ($users_id == 'new') {
            DB::table('users')->insertGetId($dados);
        } else {
            DB::table('users')->where('id', '=', $users_id)->update($dados);
        }

        return redirect()->route('usuario-listagem', ['cad' => 'ok']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function minhaconta()
    {
        $registro = DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->get()->first();

        return view('admin.usuario.form.minhaconta',[
            'title_page' => 'Meu perfil',
            'registro' => $registro
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function minhacontaPost(Request $request)
    {

        $dados["name"] = filter_var($request->get('nome'), FILTER_SANITIZE_STRING);
        $dados["email"] = filter_var($request->get('email'), FILTER_SANITIZE_STRING);

        $password_atual = filter_var($request->get('password_atual'), FILTER_SANITIZE_STRING);

        if(!Hash::check($password_atual, Auth::user()->getAuthPassword())){
            return redirect()->route('minhaconta-form', ['cad' => 'error_pass']);
        }

        $password_new = filter_var($request->get('password_new'), FILTER_SANITIZE_STRING);
        $password_new2 = filter_var($request->get('password_new2'), FILTER_SANITIZE_STRING);

        if($password_new != '' && $password_new != $password_new2){
            return redirect()->route('minhaconta-form', ['cad' => 'error_pass2']);
        }elseif($password_new != '' && $password_new == $password_new2){
            $dados["password"] = Hash::make($password_new);
        }


        //foto se vir fazer upload
        $dados["foto"] = filter_var($request->get('foto_atual'), FILTER_SANITIZE_STRING);
        $foto = $request->file('foto');
        if (!is_null($foto) && $foto->isValid()) {
            //fazer o upload
            $dados['foto'] = $foto->hashName();
            $foto->move($_SERVER['DOCUMENT_ROOT'] . '/upload/users/', $dados['foto']);
        }

        //atualizar user
        DB::table('users')->where('id', '=', Auth::user()->id)->update($dados);

        //atualizar a session
        Auth::setUser(\App\Models\User::find(Auth::user()->id));

        return redirect()->route('minhaconta-form', ['cad' => 'ok']);
    }

    public function getPerfis()
    {
        $regs = [];

        $arr = DB::table('perfil')->orderBy('nome', 'ASC')->get();
        foreach($arr as $item){
            $regs[$item->id] = $item->nome;
        }
        return $regs;
    }


    public function deletar($id){

        try {
            DB::beginTransaction();
            DB::table('users')
                ->where('id', '=', $id)
                ->update([
                    'deleted_at' => now()->toDateTimeString()
                ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('usuario-listagem', ['cad' => 'error']);
        }

        return redirect()->route('usuario-listagem', ['cad' => 'ok-deletar']);
    }
}
