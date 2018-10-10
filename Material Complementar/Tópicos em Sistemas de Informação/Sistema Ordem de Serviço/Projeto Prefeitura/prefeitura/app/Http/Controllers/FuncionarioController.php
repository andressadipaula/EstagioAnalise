<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Endereco;
use App\Departamento;

class FuncionarioController extends Controller
{
    //
    public function index()
	{
		$registros = Funcionario::all();

        return view('funcionario.index', compact('registros'));
	}

    public function cadastrar()
    {
    	$departamentos = Departamento::all();

    	return view('funcionario.cadastrar', compact('departamentos'));
    }

    public function salvar(Request $req)
    {
        //pega todos os dados inseridos
    	$dados = $req->all();

        $dados['password'] = bcrypt($dados['cpf']);

        //faz um insert no banco de dados
    	$funcionario = Funcionario::create($dados);

        //pega o id para inserir o endereço
        $dados['funcionarios_id'] = $funcionario->id;

        //insere o endereço
        Endereco::create($dados);

    	return redirect()->route('funcionario.index');
    }

    public function consultar($id)
    {
        //procura pelo seu id **provisorio**
    	$registro = Funcionario::find($id);

        //retona a view com seus dados
    	return view('funcionario.consultar', compact('funcionario'));
    }

    public function editar($id)
    {
        //procura pelo seu id **provisorio**
        $registro = Funcionario::find($id);
		
        $endereco = Endereco::where('funcionarios_id', $id)->get()->first();

        $departamentos = Departamento::all();

        //retona a view com seus dados
        return view('funcionario.editar', compact('registro','endereco','departamentos'));
    }

     public function atualizar(Request $req, $id)
    {
        //pega todos os dados inseridos
        $dados = $req->all();

         $dados['password'] = bcrypt($dados['cpf']);

		Endereco::where('funcionarios_id', $id)->get()->first()
        ->update($dados);

        //faz um insert no banco de dados
        Funcionario::find($id)->update($dados);

        return redirect()->route('funcionario.index');
    }


    public function deletar($id)
    {
        //busca pelo id
        $registro = Funcionario::find($id)->delete();

        //retorna a view.    melhor retornar uma lista sem o deletado
        return redirect()->route('funcionario.index');
    }
}
