@extends ('layout.site')

@section('titulo', 'Titulo Modificado!')

@section('conteudo')
<h3>Essa é a view index</h3>

@foreach($contatos as $contato)
	<p>{{$contato->nome}}</p>
	<p>{{$contato->tel}}</p>
@endforeach

@endsection

