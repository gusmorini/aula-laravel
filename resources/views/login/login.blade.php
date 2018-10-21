@extends(login.master)
@section('conteudo')
<section class="login">
	<div class="image-login">
		<img src="imgs/logo-webdevalfa.png" alt="WebDevAlfa" class="img-login">
	</div>

	<form class="form-login" method="get" action="dashboard">

		<!-- simulando um login -->
		<input type="hidden" name="logado" value="1">
		
		<input type="text" name="email" placeholder="E-mail">
		<input type="password" name="pass" placeholder="Senha">

		<button class="btn-login">Acessar</button>

		<a href="dashboard-recuperar" class="rel-pass">Recuperar Senha?</a>
	</form>
</section>
@endsection