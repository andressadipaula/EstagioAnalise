@extends('layout.site')
@section('titulo','Sis OS - Departamentos')
@section('conteudo')

	<div class="container">
		<h3 class="center">Editar Departamento</h3>
		<div class="row">
			<form class="" action="{{route('departamento.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
				<input type="hidden" name="_method" value="put">
        @include('departamento._form')
				<div class="container">
					<button class="btn deep-orange">Atualizar</button>
					<button href="/departamento/index" class="btn deep-orange">Voltar</button>
				</div>

			</form>
		</div>
	</div>

@endsection
