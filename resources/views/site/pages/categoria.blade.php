@extends('site.templates.master')
@section('conteudo')

<div class="category">
	
	<section class="content">
		<div class="col-md-8">

			<div class="title-category">
				<h1 class="title-category">Nome da Categoria</h1>
			</div>
			
			<?php for($i = 1; $i <= 10; $i++){?>
			<article class="post">
				<div class="image-post col-md-4 text-center">
					<img src="imgs/img1.jpg" alt="Nome Post" class="img-post">
				</div>
				<div class="description-post col-md-8">
					<h2 class="title-post">Título do post pode vir bem aqui...</h2>

					<p class="description-post">
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração...
					</p>

					<a class="btn-post" href="/post">Ir <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</article>
			<?php }?>

			<div class="pagination-posts">
				<nav aria-label="Page navigation">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li class="active"><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>

		</div><!--POSTS-->

		<!--Sidebar-->
		<div class="col-md-4 text-center">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FfaculdadeAlfaUmuarama%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=316115088513380" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>		</div><!--Sidebar-->
	</section>

</div>

@endsection
       