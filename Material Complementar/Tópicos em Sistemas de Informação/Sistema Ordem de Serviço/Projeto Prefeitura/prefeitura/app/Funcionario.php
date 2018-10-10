<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['cpf', 'rg', 'nome', 'email','password', 'dataNasc', 'telefone','permissao','departamentos_id','created_at','update_at'];
}
