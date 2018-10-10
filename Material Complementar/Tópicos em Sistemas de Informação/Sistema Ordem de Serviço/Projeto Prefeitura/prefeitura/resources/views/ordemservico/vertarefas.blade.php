@extends('layout.site')
@section('titulo','Sis OS - Ordem Serviço - Tarefas')
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Tarefas da OS</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>NOME</th>
						<th>SITUAÇÃO</th>
						<th>DEPARTAMENTO</th>
						<th>AÇÃO</th>
					</tr>
				</thead>

				<tbody>
					@foreach($registros as $registro)
                	<tr>
                		<td>{{$registro->id}}</td>
	                    <td>{{ $registro->nome }}</td>
	                    <td>{{ $registro->situacao }}</td>
						<td>
							<a class="btn" href="{{route('tarefa.editar'),$registro->id}}">Editar</a>
							<a class="btn red" href="{{route('tarefa.deletar'),$registro->id}}" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row">
			<a class="btn blue" href="{{route('tarefa.cadastrar')}}">Incluir nova Tarefa</a>
		</div>
	</div>

@endsection
