@extends('layout.site')
@section('titulo','Sis OS - Departamentos')
@section('conteudo')

	<div class="container">
		<h3 class="center">Adicionar Departamentos</h3>
		<div class="row">
			<form class="" action="{{route('departamento.salvar')}}" method="post" enctype="multipart/form-data">
			 	{{csrf_field()}}
        		@include('departamento._form')
				<div class="container">
					<button class="btn deep-orange">Salvar</button>
					<a class="btn deep-orange" href="/departamento/index" class="btn deep-orange">Voltar</a>
				</div>

			</form>
		</div>
	</div>

@endsection
