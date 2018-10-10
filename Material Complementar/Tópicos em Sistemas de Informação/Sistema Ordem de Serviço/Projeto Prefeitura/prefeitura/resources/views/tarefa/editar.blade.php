@extends('layout.site')
@section('titulo','Sis OS - Tarefas')
@section('conteudo')

	<div class="container">
		<h3 class="center">Editar Tarefa</h3>
		<div class="row">
			<form class="" action="{{route('tarefa.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
				<input type="hidden" name="_method" value="put">
        @include('tarefa._form')
				<div class="container">
					<button class="btn deep-orange">Atualizar</button>
				</div>
			</form>
		</div>
	</div>

@endsection
