@extends('layout.site')
@section('titulo','Sis OS - Funcionários')
@section('conteudo')

	<div class="container">
		<h3 class="center">Adicionar Funcionários</h3>
		<div class="row">
			<form class="" action="{{route('funcionario.salvar')}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
        @include('funcionario._form')
					<button class="btn deep-orange">Salvar</button>
					<a class="btn deep-orange" href="/funcionario/index" class="btn deep-orange">Voltar</a>
			</form>
		</div>
	</div>

@endsection
