<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['nome', 'descricao', 'departamentos_id','ordemservicos_id', 'situacao'];
}
