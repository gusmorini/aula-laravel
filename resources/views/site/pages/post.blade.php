@extends('site.templates.master')
@section('conteudo')

<div class="category">
	
	<section class="content">
		<div class="col-md-8">
			

			<article class="post">
			
 				<?php foreach($datas as $key){ ?>

				<div class="description-post-pg text-justify">
					
					<img src="{{URL::asset('/assets/uploads/posts/'.$key->image)}}" alt="{{$key->title}}" class="img-post">

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


			

		</div><!--POSTS-->

		<!--Sidebar-->
		<div class="col-md-4">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FfaculdadeAlfaUmuarama%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=316115088513380" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>		</div><!--Sidebar-->
	</section>

<!-- 
	<section class="post-relation">
		<h1 class="title-post-rel">Posts Relacionados:</h1>

		<?php for($i = 1; $i <= 4; $i++){?>
			<article class="post-rel col-md-3 col-xm-6 col-sm-12">
				<a href="">
					<div class="image-post text-center">
						<img src="{{url('imgs/img1.jpg')}}" alt="Nome Post" class="img-post">
					</div>
					<div class="description-post">
						<h2 class="title-post-rel-list">Título do post pode vir bem aqui...</h2>
					</div>
				</a>
			</article>
			<?php }?>
	</section> -->

</div>

@endsection
       