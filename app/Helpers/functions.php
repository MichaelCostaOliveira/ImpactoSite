<?php

/*
 * Formatar data e hora passando formato de entrade e de saida
 * */

use Illuminate\Support\Facades\DB;

function formatDateAndTime($date, $formatEntrada = '', $formatSaida = 'Y-m-d'){
    if($date==''){
        return '';
    }else{
        $formatEntrada = ($formatEntrada==''?__('formulario.data_format'):$formatEntrada);
        if($date=='') return '';
        return \Carbon\Carbon::createFromFormat($formatEntrada, $date)->format($formatSaida);
    }
};

function getPermmissoes(){
    $permissao = DB::table('users')
        ->select('perfil.*')
        ->join('perfil', 'perfil.id', '=', 'users.perfil_id')
        ->where('users.id', '=', \Auth::user()->id)->first();

    return $permissao;
}
