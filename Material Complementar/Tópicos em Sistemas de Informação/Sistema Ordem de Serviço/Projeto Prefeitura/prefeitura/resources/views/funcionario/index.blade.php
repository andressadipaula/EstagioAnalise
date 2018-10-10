@extends('layout.site')
@section('titulo','Sis OS - Funcionários')
@section('conteudo')

	<!-- <div class="container"> -->
		<h3 class="center">Funcionários</h3>
		<div class="row"  style="padding:0 30px;"	>
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>CPF</th>
						<th>RG</th>
						<th>NOME</th>
						<th>TELEFONE</th>
						<th>PERMISSÃO</th>
						<th>DEPARTAMENTO</th>
						<th>AÇÃO</th>
					</tr>
				</thead>

				<tbody>

					@foreach($registros as $registro)
                	<tr>
                		<td>{{$registro->id}}</td>
	                    <td>{{ $registro->cpf }}</td>
	                    <td>{{ $registro->rg }}</td>
	                    <td>{{ $registro->nome }}</td>
	                    <td>{{ $registro->telefone }}</td>
	                    <td>{{ $registro->permissao }}</td>
	                    <td>{{ $registro->departamentos_id }}</td>
						<td>
							<a class="btn" href="{{route('funcionario.editar',$registro->id)}}">Editar</a>
							<a class="btn red" href="{{route('funcionario.deletar',$registro->id)}}" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
						</td>
					</tr>
					@endforeach


				</tbody>
			</table>
		</div>

		<div style="margin-left:30px;" class="row">
			<a class="btn blue" href="{{route('funcionario.cadastrar')}}">Adicionar</a>
			<a class="btn blue" href="{{route('home')}}">Voltar</a>
		</div>
	<!-- </div> -->

@endsection
