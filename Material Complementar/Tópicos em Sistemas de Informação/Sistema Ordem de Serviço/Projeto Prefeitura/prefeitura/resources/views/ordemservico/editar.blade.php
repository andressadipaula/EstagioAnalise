@extends('layout.site')
@section('titulo','Sis OS - Ordem Serviço')
@section('conteudo')

	<div class="container">
		<h3 class="center">Editar Ordem de Serviço</h3>
		<div class="row">
			<form class="" action="{{route('ordemservico.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
			  {{csrf_field()}}
				<input type="hidden" name="_method" value="put">
        @include('ordemservico._form')
        <button class="btn deep-orange">Atualizar</button>
        <a href="{{route('ordemservico.index')}}" class="btn deep-orange">Voltar</a>
			</form>
		</div>
	</div>

@endsection
