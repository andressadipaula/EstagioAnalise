<!DOCTYPE html>
<html>
	<head>
	<title>@yield('titulo')</title>
	<link rel="icon" href="/img/icone.png">
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>


</html>
	<body>

		<header>



				<nav>
	    <div class="nav-wrapper deep-orange">
	      <a style="padding-left:10px;" href="#!" class="brand-logo"><i class="material-icons right">build</i> SiS OS</a>
				<!-- <img style="width:50px; height:50px;" src="/img/sisos.jpg" alt=""> -->
	      <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">

					@if(Auth::user())
					<li><a href="{{route('funcionario.index')}}">Funcionário</a></li>
					<li><a href="{{route('departamento.index')}}">Departamento</a></li>
					<li><a href="{{route('tarefa.index')}}">Tarefas</a></li>
					<li><a href="{{route('ordemservico.index')}}">Ordem de Serviço</a></li>
					<!-- <li><a href="#">{{Auth::user()->nome}}</a></li> -->
					<li><a href="{{route('login.sair')}}">Sair</a></li>
					@endif



	      </ul>
	    </div>
	  </nav>

		</header>
