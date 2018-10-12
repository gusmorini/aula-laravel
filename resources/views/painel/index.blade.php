@extends('painel.templates.dashboard')
@section('conteudo')
<div class="title-pg">
    <h1 class="title-pg">Dashboard</h1>
</div>

<div class="content-din">

    @forelse($datas as $key)
    <div class="col-md-3 col-sm-4 col-xm-12">
        <div class="rel-dash">
            <i class="fa fa-user" aria-hidden="true"></i>
            <div class="text-rel">
                <h2 class="result">
                    {{ $key->name }}
                </h2>
                <h3 class="result-ds">
                    {{ $key->email }}
                </h3>
            </div>
        </div>
    </div>
    @empty

    <h1>nenhum usuario cadastrado...</h1>

    @endforelse

</div><!--Content Dinâmico-->



@endsection