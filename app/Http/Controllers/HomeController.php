<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use App\Models\Motoristas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $breadcrumb = ['title'=>'Dashboard', 'caminho'=>[['rota'=>'', 'nome'=>'']]];

        $user_motorista = Leads::get();

        return view('home',
            [
                'breadcrumb'=>$breadcrumb,
            ]
        );
    }
}
