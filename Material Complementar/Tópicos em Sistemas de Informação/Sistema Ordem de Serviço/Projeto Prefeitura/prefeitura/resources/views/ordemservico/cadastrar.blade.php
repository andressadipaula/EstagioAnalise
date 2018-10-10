@extends('layout.site')
@section('titulo','Sis OS - Ordem Serviço')
@section('conteudo')

	<div class="container">
		<h3 class="center">Adicionar Ordem de Serviço</h3>
		<div class="row">
			<form class="" action="{{route('ordemservico.salvar')}}" method="post" enctype="multipart/form-data">
			  	{{csrf_field()}}
        		@include('ordemservico._form')
				<div class="container">
					<button class="btn deep-orange">Salvar</button>
					<a href="{{route('ordemservico.index')}}" class="btn deep-orange">Voltar</a>
				</div>

			</form>
		</div>
	</div>

@endsection
