	@extends('layout.site')
@section('titulo','Sis OS - Departamentos')
@section('conteudo')

	<div class="container">
		<h3 class="center">Departamentos</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>NOME</th>
						<th>DESCRIÇÃO</th>
						<th>AÇÃO</th>
					</tr>
				</thead>

				<tbody>
					@foreach($registros as $registro)
	                	<tr>
	                		<td>{{$registro->id}}</td>
		                    <td>{{ $registro->nome }}</td>
		                    <td>{{ $registro->descricao }}</td>
							<td>
								<a class="btn " href="{{route('departamento.editar',$registro->id)}}">Editar</a>
								<a class="btn red" href="{{route('departamento.deletar',$registro->id)}}" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row">
			<a class="btn blue" href="{{route('departamento.cadastrar')}}">Adicionar</a>
			<a class="btn blue" href="{route('home')}}">Voltar</a>
		</div>
	</div>

@endsection
