<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('PermissaoPerfil');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request) {
        $perPage = $request->get('perPage', 10);
        $registros = DB::table('perfil')->where('deleted_at', '=', null)->orderBy('nome', 'ASC')->paginate($perPage);

        return view('admin.perfil.listagem.perfil', [
            'title_page' => 'Perfil',
            'registros' => $registros
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function form($perfil_id)
    {
        $registro = DB::table('perfil')
            ->where('id', '=', $perfil_id)
            ->get()->first();

        return view('admin.perfil.form.perfil', [
            'title_page' => 'Perfil',
            'registro' => $registro,
            'id' => $perfil_id
        ]);
    }

    /**
     * Salvar
     */
    public function formPost($perfil_id, Request $request)
    {
        $dados["nome"] = filter_var($request->get('nome'), FILTER_SANITIZE_STRING);
        $dados['administrativo'] = filter_var($request->get('administrativo', 0), FILTER_SANITIZE_NUMBER_INT);
        $dados['leads'] = filter_var($request->get('leads', 0), FILTER_SANITIZE_NUMBER_INT);

        if ($perfil_id == 'new') {
            $perfil_id = DB::table('perfil')->insertGetId($dados);
        } else {
            DB::table('perfil')->where('id', '=', $perfil_id)->update($dados);
        }

        return redirect()->route('perfil-listagem', ['cad' => 'ok']);

    }

    public function deletar($id){
        $perfilUser = DB::table('users')
            ->where('perfil_id', '=', $id)->get();
        if (!$perfilUser->isEmpty()) {
            return redirect()->route('perfil-listagem', ['cad' => 'error','mensagem' => 'Existem Usuários com esse perfil']);
        }

        try {
            DB::beginTransaction();
            DB::table('perfil')
                ->where('id', '=', $id)
                ->update([
                    'deleted_at' => now()->toDateTimeString()
                ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('perfil-listagem', ['cad' => 'error']);
        }

        return redirect()->route('perfil-listagem', ['cad' => 'ok']);
    }
}
