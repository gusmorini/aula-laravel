<?php use App\Models\Category;  ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog WebDevAlfa</title>

		<!--Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!--CSS Person-->
		<!-- {{url('admin/css/webdevalfa.css')}} -->
		<link rel="stylesheet" href="{{url('css/webdevalfa.css')}}">

		<!--CSS Person-->
		<link rel="stylesheet" href="{{url('css/webdevalfa-reset.css')}}">

		<!--CSS Person-->
		<link rel="stylesheet" href="{{url('css/webdevalfa-responsive.css')}}">

		<!--Favicon-->
		<link rel="icon" type="image/png" href="{{url('imgs/favicon.png')}}">
	</head>
<body>
	
	<header class="top">
		<div class="container">
			<div class="logo col-md-6">
				<a href="?pg=home">
					<img src="{{url('imgs/logo-webdevalfa.png')}}" alt="WebDevAlfa" class="logo">
				</a>
			</div>

			<div class="form col-md-6">
				<form class="form form-search form-inline">
					<input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">

					<button>
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
			</div>
		</div><!--End Container-->
	</header><!--End Header TOP-->


	<div class="menu">
		<div class="container container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{url('/')}}">Home</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                <ul class="dropdown-menu">

              		@forelse(Category::all() as $key)
                  	<li><a href="{{ url('category/'.$key->id) }}">{{ $key->name }}</a></li>
                  	@empty
                  		<li>...</li>
                  	@endforelse
                </ul>
              </li>

              <li><a href="{{url('empresa')}}">Empresa</a></li>
              <li><a href="{{url('contato')}}">Contato</a></li>
              <li><a href="{{url('login')}}">Painel</a></li>
              
            </ul>

          </div><!--/.nav-collapse -->
        </div>
	</div><!--End Menu-->


	<div class="container">
		
	@yield('conteudo')

	</div><!--End Container-->


	<footer class="footer">
		<p class="footer">Todos os direitos reservados - WebDevAlfa <?=date('Y')?></p>
	</footer>


	<!--jQuery-->
	<script src="{{url('js/jquery-3.1.1.min.js')}}"></script>

	<!--Bootstrap .js-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>