<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordemservico;
use App\Tarefa;

class OrdemservicoController extends Controller
{
    public function index()
	{
		$registros = Ordemservico::all();

        return view('ordemservico.index', compact('registros'));
	}

    public function vertarefas($id)
    {
        $registros = Tarefa::where('ordemservicos_id',$id)->get();


        return view('ordemservico.vertarefas', compact('registros'));
    }

    public function cadastrar()
    {
    	return view('ordemservico.cadastrar');
    }

    public function salvar(Request $req)
    {
        //pega todos os dados inseridos
    	$dados = $req->all();

        //faz um insert no banco de dados
    	$ordemservico = Ordemservico::create($dados);

    	return redirect()->route('ordemservico.index');
    }

    public function consultar($id)
    {
        //procura pelo seu id **provisorio**
    	$registro = Ordemservico::find($id);

        //retona a view com seus dados
    	return view('ordemservico.consultar', compact('registro'));
    }

    public function editar($id)
    {
        //procura pelo seu id **provisorio**
        $registro = Ordemservico::find($id);

        //retona a view com seus dados
        return view('ordemservico.editar', compact('registro'));
    }

     public function atualizar(Request $req, $id)
    {
        //pega todos os dados inseridos
        $dados = $req->all();

        //faz um insert no banco de dados
        Ordemservico::find($id)->update($dados);

        return redirect()->route('ordemservico.index');
    }


    public function deletar($id)
    {
        //busca pelo id
        $registro = Ordemservico::find($id)->delete();

        //retorna a view.    melhor retornar uma lista sem o deletado
        return redirect()->route('ordemservico.index');
    }
}
