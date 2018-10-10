@extends('layout.site')
@section('titulo','Sis OS - Tarefa')
@section('conteudo')

	<div class="container">
		<h3 class="center">Adicionar Tarefa</h3>
		<div class="row">
			<form class="" action="{{route('tarefa.salvar')}}" method="post" enctype="multipart/form-data">
			  	{{csrf_field()}}
        		@include('tarefa._form')
				<div class="container">
					<button class="btn deep-orange">Salvar</button>
				</div>

			</form>
		</div>
	</div>

@endsection
