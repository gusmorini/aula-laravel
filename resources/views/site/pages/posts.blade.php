@extends('site.templates.master')
@section('conteudo')

<section class="content">
    <div class="col-md-8">

        <h2>{{$title}}</h2>
        
        @forelse($datas as $key)

        <article class="post">
            <div class="image-post col-md-4 text-center">
                <img src="{{URL::asset('/assets/uploads/posts/'.$key->image)}}" alt="{{ $key->title }}" class="img-post">
            </div>
            <div class="description-post col-md-8">
                <h2 class="title-post">{{ $key->title }}</h2>

                <p class="description-post">
                    {{ str_limit($key->description, 600) }}
                </p>

                <a class="btn-post" href="/post/{{$key->id}}">Ir <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </article>
        @empty
            <h3>nenhum post cadastrado...</h3>
        @endforelse

        {{-- {{$datas->links()}} --}}

        @if(isset($dataForm))
            {{$datas->appends(Request::only('pesquisa'))->links()}}
        @else
            {{$datas->links()}}
        @endif

    </div><!--POSTS-->

@endsection
       