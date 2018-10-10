<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['rua', 'numero', 'bairro', 'cidade','funcionarios_id', 'created_at','update_at'];
}
