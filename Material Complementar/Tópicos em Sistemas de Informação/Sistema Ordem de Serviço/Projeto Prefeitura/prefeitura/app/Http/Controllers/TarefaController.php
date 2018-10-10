<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Ordemservico;
use Auth;

class TarefaController extends Controller
{
     public function index()
	{
		$registros = Tarefa::all();

        return view('tarefa.index', compact('registros'));
	}

    public function cadastrar()
    {    
        $ordemservicos = Ordemservico::all();

    	return view('tarefa.cadastrar', compact('ordemservicos'));
    }

    public function salvar(Request $req)
    {
        //pega todos os dados inseridos
    	$dados = $req->all();
        
        $depto_id = Auth::user()->departamentos_id;

        $req['departamentos_id'] = $depto_id;

        //faz um insert no banco de dados
    	$tarefa = Tarefa::create($dados);

    	return redirect()->route('tarefa.index');
    }

    public function consultar($id)
    {
        //procura pelo seu id **provisorio**
    	$registro = Tarefa::find($id);

        //retona a view com seus dados
    	return view('tarefa.consultar', compact('tarefa'));
    }

    public function editar($id)
    {
        //procura pelo seu id **provisorio**
        $registro = Tarefa::find($id);

        $ordemservicos = Ordemservico::all();

        //retona a view com seus dados
        return view('tarefa.editar', compact('registro','ordemservicos'));
    }

     public function atualizar(Request $req, $id)
    {
        //pega todos os dados inseridos
        $dados = $req->all();

        //faz um insert no banco de dados
        Tarefa::find($id)->update($dados);

        return redirect()->route('tarefa.index');
    }


    public function deletar($id)
    {
        //busca pelo id
        $registro = Tarefa::find($id)->delete();

        //retorna a view.    melhor retornar uma lista sem o deletado
        return redirect()->route('tarefa.index');
    }
}
