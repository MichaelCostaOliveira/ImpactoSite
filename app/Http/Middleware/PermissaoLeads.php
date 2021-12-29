<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class PermissaoLeads
{
    private $nomeMiddlewares = ['leads'];
    /**
     * fução padrão para bloqueio de ação pautado no nomeMiddleware
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permissao = DB::table('users')
        ->select('perfil.*')
        ->join('perfil', 'perfil.id', '=', 'users.perfil_id')
        ->where('users.id', '=', \Auth::user()->id)->first();
        //comparar se tem o middleware
        if($permissao->leads == 0)
            return redirect()->route('permissao-negada',['cad' => 'error']);

        return $next($request);
    }
}
