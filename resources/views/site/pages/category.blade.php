@extends('site.templates.master')
@section('conteudo')

<div class="category">
	
	<section class="content">
		<div class="col-md-8">

			<div class="title-category">
				<h1 class="title-category">{{ $title }}</h1>
			</div>
			
			@forelse($datas as $key)
			<article class="post">
				<div class="image-post col-md-4 text-center">
					<img src="{{URL::asset('/assets/uploads/posts/'.$key->image)}}" alt="{{$key->title}}" class="img-post">
				</div>
				<div class="description-post col-md-8">
					<h2 class="title-post">{{$key->title}}</h2>

					<p class="description-post">
						{{ str_limit($key->description,600)}}
					</p>

					<a class="btn-post" href="/post/{{$key->id}}">Ir <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</article>
			@empty
            <div class="alert alert-danger" role="alert">
              Nenhum post encontrado...
            </div>
        	@endforelse
			

        {{-- {{$datas->links()}} --}}

        @if(isset($dataForm))
            {{$datas->appends(Request::only('pesquisa'))->links()}}
        @else
            {{$datas->links()}}
        @endif

		</div><!--POSTS-->

		<!--Sidebar-->
		<div class="col-md-4 text-center">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FfaculdadeAlfaUmuarama%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=316115088513380" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>		</div><!--Sidebar-->
	</section>

</div>

@endsection
       