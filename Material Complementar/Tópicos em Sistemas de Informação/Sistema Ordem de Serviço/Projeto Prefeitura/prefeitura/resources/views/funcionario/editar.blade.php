@extends('layout.site')
@section('titulo','Sis OS - Funcionários')
@section('conteudo')

	<div class="container">
		<h3 class="center">Editar Funcionário</h3>
		<div class="row">
			<form class="" action="{{route('funcionario.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
				<input type="hidden" name="_method" value="put">
        @include('funcionario._form')
        <button class="btn deep-orange">Atualizar</button>
        <button href="/funcionario/index" class="btn deep-orange">Voltar</button>
			</form>
		</div>
	</div>

@endsection
