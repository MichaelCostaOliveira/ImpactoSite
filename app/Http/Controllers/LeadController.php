<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $nome = filter_var($request->get('name'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->get('email'), FILTER_SANITIZE_EMAIL);
        $plano = filter_var($request->get('plano'), FILTER_SANITIZE_STRING);
        $message = filter_var($request->get('message'), FILTER_SANITIZE_STRING);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'plano' => 'required',
        ], [
                'name.required' => 'O campo Nome é obrigatorio!',
                'email.required' => 'O campo E-mail é obrigatorio!',
                'plano.required' => 'O campo Plano é obrigatorio!'
            ]
        );

        try {
            DB::beginTransaction();
                DB::table('leads')
                    ->insert([
                        'nome' => $nome,
                        'email' => $email,
                        'plano' => $plano,
                        'observacoes' => $message
                    ]);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->withErrors('Erro ao Enviar');
        }
        return redirect()->route('site', ['lead' => 'ok']);
    }
}
