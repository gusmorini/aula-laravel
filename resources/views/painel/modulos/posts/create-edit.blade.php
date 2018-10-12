@extends('painel.templates.dashboard')
@section('conteudo')
<div class="title-pg">
    <h1 class="title-pg">Criar um post</h1>
</div>

<div class="content-din">

     <!-- Alert Errors start -->
     @if( isset($errors) && count($errors) > 0 )
     <div class="col-md-12">
         <div class="alert alert-warning alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-warning"></i> Atenção!</h4>
             @foreach( $errors->all() as $error)
                 <p>{{$error}}</p>
             @endforeach
         </div>
     </div>

 @endif
 <!-- /.Alert Errors start -->
 <!-- form start -->
    @if(isset($data))
    <form 
    class="form form-search form-ds"  
    method="post" action="{{route('posts.update', $data->id)}}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
    @else
    <form 
    class="form form-search form-ds"  
    method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
    @endif
        {{ csrf_field() }} 
    
    <div class="form-group col-md-4">
        <label for="InputName">Categoria</label>
        <select class="form-control" name="category_id">
            @forelse($categorias as $key)
                <option value="{{$key->id}}"
                    <?php if (isset($data) and $data->category_id == $key->id)
                    {
                        echo 'selected';
                    }
                    ?>
                    >{{$key->name}}</option>
                @empty
                <option value="">
                    ...
                </option>
            @endforelse
        </select>
        <!-- <input type="text" class="form-control" id="InputName" name="name" placeholder="Nome" value="{{$data->name or old('name')}}"> -->
    </div>    

    <div class="form-group col-md-4">
        <label for="InputName">Título</label>
        <input type="text" class="form-control" id="InputTitle" name="title" placeholder="Titulo" value="{{$data->title or old('title')}}">
    </div> 

    <div class="form-group col-md-4">
        <label for="InputFile">Imagem de Perfil</label>
        <input type="file" id="InputFile" name="image">
    </div>   

<!--     <div class="form-group col-md-4">
        <label for="InputName">URL</label>
        <input type="text" class="form-control" id="InputUrl" name="url" placeholder="http://" value="{{$data->url or old('url')}}">
    </div> -->

    <input type="hidden" name="url" value="http://">
    
    <!-- textarea -->
    <div class="form-group col-md-6">
        <label>Descrição</label>
        <textarea class="form-control" rows="3" name="description" placeholder="Digite aqui ...">{{$data->description or old('description')}}</textarea>
    </div>

    <div class="form-group col-md-6">
        <label>Status</label><br>
        <select class="form-control" name="status">
        <?php
            $status = ['R'=>'Rascunho', 'A'=>'Ativo'];
            print_r($status);
            foreach ($status as $key => $value) {
                $sel = '';
                if (isset($data) and $data->status == $key)
                {
                    $sel = 'selected';
                }
                echo "<option value='$key' $sel >$value</option>";
            }
        ?>
        </select>
    </div>





    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
    <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
    <input type="hidden" name="hour" value="{{ date('H:i:s') }}">

        <div class="form-group col-md-12">
            <button class="btn btn-info">Enviar</button>
        </div>
    </form>

</div><!--Content Dinâmico-->
@endsection