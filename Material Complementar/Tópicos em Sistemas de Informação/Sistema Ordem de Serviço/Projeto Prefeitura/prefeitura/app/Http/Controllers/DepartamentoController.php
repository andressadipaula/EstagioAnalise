<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    public function index()
	{
		$registros = Departamento::all();

        return view('departamento.index', compact('registros'));
	}

    public function cadastrar()
    {
    	return view('departamento.cadastrar');
    }

    public function salvar(Request $req)
    {
        //pega todos os dados inseridos
    	$dados = $req->all();

        //faz um insert no banco de dados
    	$departamento = Departamento::create($dados);

    	return redirect()->route('departamento.index');
    }

    public function consultar($id)
    {
        //procura pelo seu id **provisorio**
    	$registro = Departamento::find($id);

        //retona a view com seus dados
    	return view('departamento.consultar', compact('departamento'));
    }

    public function editar($id)
    {
        //procura pelo seu id **provisorio**
        $registro = Departamento::find($id);

        //retona a view com seus dados
        return view('departamento.editar', compact('registro'));
    }

     public function atualizar(Request $req, $id)
    {
        //pega todos os dados inseridos
        $dados = $req->all();

        //faz um insert no banco de dados
        Departamento::find($id)->update($dados);

        return redirect()->route('departamento.index');
    }


    public function deletar($id)
    {
        //busca pelo id
        $registro = Departamento::find($id)->delete();

        //retorna a view.    melhor retornar uma lista sem o deletado
        return redirect()->route('departamento.index');
    }
}
