@extends('layout.site')
@section('titulo','Sis OS - Ordem Serviço')
@section('conteudo')

	<div class="container">
		<h3 class="center">Ordem de Serviço</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>NOME</th>
						<th>SITUAÇÃO</th>
						<th>DATA_INÍCIO</th>
						<th>DATA_FIM</th>
						<th>AÇÃO</th>
					</tr>
				</thead>

				<tbody>
					@foreach($registros as $registro)
                	<tr>
                		<td>{{$registro->id}}</td>
	                    <td>{{ $registro->nome }}</td>
	                    <td>{{ $registro->situacao }}</td>
	                    <td>{{ $registro->data_inicio }}</td>
	                    <td>{{ $registro->data_fim }}</td>
						<td>
							<a class="btn deep-orange lighten-2 " href="{{route('ordemservico.editar',$registro->id)}}">Editar</a>
							<a class="btn " href="{{route('ordemservico.vertarefas',$registro->id)}}">Ver Tarefas</a>
							<a class="btn red" href="{{route('ordemservico.deletar',$registro->id)}}" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row">
			<a class="btn blue" href="{{route('ordemservico.cadastrar')}}">Adicionar</a>
			<a class="btn blue" href="{{route('home')}}">Voltar</a>
		</div>
	</div>

@endsection
