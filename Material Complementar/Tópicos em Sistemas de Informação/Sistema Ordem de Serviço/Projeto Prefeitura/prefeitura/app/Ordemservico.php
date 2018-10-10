<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordemservico extends Model
{
    protected $fillable = ['nome', 'descricao', 'situacao','data_inicio', 'data_fim'];
}
