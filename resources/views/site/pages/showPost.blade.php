@extends('site.templates.master')
@section('conteudo')

<div class="category">
	
	<section class="content">
		<div class="col-md-8">
			

			<article class="post">
			
 				<?php foreach($data as $key){ ?>

				<div class="image-post text-center">
					<img src="imgs/img1.jpg" alt="Nome Post" class="img-post">
				</div>
				<div class="description-post-pg text-justify">
					<p class="details-post">
						<span>Autor: </span> {{ $key->user->name }} / <span>Data publicação</span>: <time datetime=""> {{ $key->date }} </time>	
					</p>

					<h2 class="title-post-pg">{{ $key->title }}</h2>

					<p>
						{{ $key->description }}
					</p>

				</div>

				<?php } ?>
			
			</article><!--End Post-->


			<article class="post comments">
				<h2 class="title-comment">Deixe o seu comentário</h2>
				<form class="form form-contact form-comment">
					<input type="name" name="nome" placeholder="Nome:">
					<input type="email" name="email" placeholder="E-mail:">
					<textarea name="descricao" placeholder="Descrição"></textarea>

					<button>Enviar</button>
				</form>

				<div class="comment">
					<div class="col-md-2 text-center">
						<img src="imgs/no-image.png" alt="Jaime Vendrame" class="user-comment-img img-circle">
					</div>
					<div class="col-md-10 comment-user">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					</div>
				</div>

				<div class="comment">
					<div class="col-md-2 text-center">
						<img src="imgs/no-image.png" alt="Jaime Vendrame" class="user-comment-img img-circle">
					</div>
					<div class="col-md-10 comment-user">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					</div>
				</div>
				<div class="reply-comment">
					<div class="col-md-2 text-center">
						<img src="imgs/no-image.png" alt="Jaime Vendrame" class="user-comment-img img-circle">
					</div>
					<div class="col-md-10 comment-user">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					</div>
				</div>
				<div class="reply-comment">
					<div class="col-md-2 text-center">
						<img src="imgs/no-image.png" alt="Jaime Vendrame" class="user-comment-img img-circle">
					</div>
					<div class="col-md-10 comment-user">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					</div>
				</div>

				<div class="comment">
					<div class="col-md-2 text-center">
						<img src="imgs/no-image.png" alt="Jaime Vendrame" class="user-comment-img img-circle">
					</div>
					<div class="col-md-10 comment-user">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
					</div>
				</div>
			</article>


		</div><!--POSTS-->

		<!--Sidebar-->
		<div class="col-md-4">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FfaculdadeAlfaUmuarama%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=316115088513380" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>		</div><!--Sidebar-->
	</section>


	<section class="post-relation">
		<h1 class="title-post-rel">Posts Relacionados:</h1>

		<?php for($i = 1; $i <= 4; $i++){?>
			<article class="post-rel col-md-3 col-xm-6 col-sm-12">
				<a href="">
					<div class="image-post text-center">
						<img src="imgs/img1.jpg" alt="Nome Post" class="img-post">
					</div>
					<div class="description-post">
						<h2 class="title-post-rel-list">Título do post pode vir bem aqui...</h2>
					</div>
				</a>
			</article>
			<?php }?>
	</section>

</div>

@endsection
       