<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route Login
Route::get('/', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::get('/home', ['as'=>'home','uses'=>'LoginController@home']);
Route::get('sair', ['as'=>'login.sair','uses'=>'LoginController@sair']);
Route::post('entrar', ['as'=>'login.entrar','uses'=>'LoginController@entrar']);

//*************************************************************************************************//
//Rotas Andressa
//Rotas Funcionario
/*
Route::get('/funcionario/index', function (){return view('funcionario.index');});
Route::get('/funcionario/adicionar', function (){return view('funcionario.adicionar');});
Route::get('/funcionario/editar', function (){return view('funcionario.editar');});
*/
/*
//Rotas Departamento
Route::get('/departamento/index', function (){return view('departamento.index');});
Route::get('/departamento/adicionar', function (){return view('departamento.adicionar');});
Route::get('/departamento/editar', function (){return view('departamento.editar');});
*/
/*
//Rotas Ordem de Serviço
Route::get('/ordemservico/index', function (){return view('ordemservico.index');});
Route::get('/ordemservico/adicionar', function (){return view('ordemservico.adicionar');});
Route::get('/ordemservico/editar', function (){return view('ordemservico.editar');});
Route::get('/ordemservico/vertarefas', function (){return view('ordemservico.vertarefas');});
*/
/*
//Rotas Tarefas
Route::get('/tarefa/index', function (){return view('tarefa.index');});
Route::get('/tarefa/adicionar', function (){return view('tarefa.adicionar');});
Route::get('/tarefa/editar', function (){return view('tarefa.editar');});
*/
//*************************************************************************************************//

//rotas para gerenciar interesses
Route::get('/funcionario/index',['as'=>'funcionario.index','uses'=>'FuncionarioController@index']);
Route::post('/funcionario/buscar/{nome}',['as'=>'funcionario.buscar','uses'=>'FuncionarioController@buscar']);
Route::get('/funcionario/cadastrar',['as'=>'funcionario.cadastrar','uses'=>'FuncionarioController@cadastrar']);
Route::post('/funcionario/salvar',['as'=>'funcionario.salvar','uses'=>'FuncionarioController@salvar']);
Route::get('/funcionario/editar/{id}',['as'=>'funcionario.editar','uses'=>'FuncionarioController@editar']);
Route::put('/funcionario/atualizar/{id}',['as'=>'funcionario.atualizar','uses'=>'FuncionarioController@atualizar']);
Route::get('/funcionario/deletar/{id}',['as'=>'funcionario.deletar','uses'=>'FuncionarioController@deletar']);


Route::get('/departamento/index',['as'=>'departamento.index','uses'=>'DepartamentoController@index']);
Route::post('/departamento/buscar/{nome}',['as'=>'departamento.buscar','uses'=>'DepartamentoController@buscar']);
Route::get('/departamento/cadastrar',['as'=>'departamento.cadastrar','uses'=>'DepartamentoController@cadastrar']);
Route::post('/departamento/salvar',['as'=>'departamento.salvar','uses'=>'DepartamentoController@salvar']);
Route::get('/departamento/editar/{id}',['as'=>'departamento.editar','uses'=>'DepartamentoController@editar']);
Route::put('/departamento/atualizar/{id}',['as'=>'departamento.atualizar','uses'=>'DepartamentoController@atualizar']);
Route::get('/departamento/deletar/{id}',['as'=>'departamento.deletar','uses'=>'DepartamentoController@deletar']);

Route::get('/ordemservico/index',['as'=>'ordemservico.index','uses'=>'OrdemservicoController@index']);
Route::post('/ordemservico/buscar/{nome}',['as'=>'ordemservico.buscar','uses'=>'OrdemservicoController@buscar']);
Route::get('/ordemservico/{id}/vertarefas',['as'=>'ordemservico.vertarefas','uses'=>'OrdemservicoController@vertarefas']);
Route::get('/ordemservico/cadastrar',['as'=>'ordemservico.cadastrar','uses'=>'OrdemservicoController@cadastrar']);
Route::post('/ordemservico/salvar',['as'=>'ordemservico.salvar','uses'=>'OrdemservicoController@salvar']);
Route::get('/ordemservico/editar/{id}',['as'=>'ordemservico.editar','uses'=>'OrdemservicoController@editar']);
Route::put('/ordemservico/atualizar/{id}',['as'=>'ordemservico.atualizar','uses'=>'OrdemservicoController@atualizar']);
Route::get('/ordemservico/deletar/{id}',['as'=>'ordemservico.deletar','uses'=>'OrdemservicoController@deletar']);

Route::get('/tarefa/index',['as'=>'tarefa.index','uses'=>'TarefaController@index']);
Route::post('/tarefa/buscar/{nome}',['as'=>'tarefa.buscar','uses'=>'TarefaController@buscar']);
Route::get('/tarefa/cadastrar/',['as'=>'tarefa.cadastrar','uses'=>'TarefaController@cadastrar']);
Route::post('/tarefa/salvar',['as'=>'tarefa.salvar','uses'=>'TarefaController@salvar']);
Route::get('/tarefa/editar/{id}',['as'=>'tarefa.editar','uses'=>'TarefaController@editar']);
Route::put('/tarefa/atualizar/{id}',['as'=>'tarefa.atualizar','uses'=>'TarefaController@atualizar']);
Route::get('/tarefa/deletar/{id}',['as'=>'tarefa.deletar','uses'=>'TarefaController@deletar']);








Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);

Route::put('/contato', ['uses'=>'ContatoController@editar']);

//Route protected
Route::group(['middleware'=>'auth'], function(){

  Route::get('/admin/cursos', ['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
  Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
  Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
  Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
  Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
  Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
});
