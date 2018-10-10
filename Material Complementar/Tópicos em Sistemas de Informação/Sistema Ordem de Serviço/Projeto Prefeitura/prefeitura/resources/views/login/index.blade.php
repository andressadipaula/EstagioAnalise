@extends('layout.site')
@section('titulo','SiS OS')
@section('conteudo')

	<div class="container">
		<h3 class="center">Login</h3>
		<div class="row">
			<form class="" action="{{route('login.entrar')}}" method="post">
			  {{csrf_field()}}

				<div class="container">
					<div class="row">
						<div class="container">

			        <div class="input-field">
			          <input type="text" name="email">
			          <label for="">Email</label>
			        </div>

			        <div class="input-field">
			          <input type="password" name="senha">
			          <label for="">Senha</label>
			        </div>

							<button class="btn deep-orange">Entrar</button>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>

@endsection
