<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leads extends Model
{
    use SoftDeletes;
    protected $table = 'leads';
    protected $fillable	 = [
        'id',
        'nome',
        'email',
        'plano',
        'observacoes',
        'status_id'
    ];

}
