<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    //
    public function index(){
    	
    	$contatos=[
    	(object)["nome"=>"Maria", "tel"=>"32323223"],
    	(object)["nome"=>"Andressa", "tel"=>"32777223"],
    	];

        $contato= new Contato();
        $con= $contato->lista();
        dd($con->nome);
    	return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req){
    	dd($req->all());
    	return "Esse é o criar controller do ContatoController-Criar";
    }

    public function editar(){
    	return "Esse é o editar controller do contadoController-Editar";
    }


}
