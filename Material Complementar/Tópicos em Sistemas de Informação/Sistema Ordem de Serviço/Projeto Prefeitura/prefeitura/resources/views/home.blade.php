@extends('layout.site')
@section('titulo','Sis OS - Ordem Serviço')
@section('conteudo')

	<div class="container">
		<h3 class="center">SiS OS</h3>

    <div class="row" style="text-align:center;">
         <div class="col s12">
           <div class="card">
             <div class="card-content">
							 <h4>Bem-Vindo!</h4>
               <h4>{{Auth::user()->nome}}</h4>
             </div>
           </div>
         </div>
     </div>

	</div>

@endsection
