<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Painel\StandardController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Post;
use App\Models\Category;

class PostController extends StandardController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // protected $model;
    // protected $totalpages = 2;
    protected $views = 'painel.modulos.posts';
    protected $rotas = 'posts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Post $post)
    {
        $this->model = $post;

        //dd( $this->model->with('user')->get() );

    }

    public function index()
    {
        $datas = $this->model->with('user','category')->paginate($this->totalpages);
        return view ("{$this->views}.index", compact('datas'));
    }

    public function create()
    {
        $categorias = Category::all();
        return view ("{$this->views}.create-edit", compact('categorias'));
    }

    public function edit($id)
    {
         //Recuperar usuário
        $data = $this->model->find($id);
        $categorias = Category::all();
        return view("{$this->views}.create-edit", compact('data','categorias'));
    }

    public function search(Request $request)
    {
        //Recupera os dados do formulário
        $dataForm = $request->get('pesquisa');

        //Filtra os usuários
        $datas = $this->model
            ->where('title', 'LIKE', "%{$dataForm}%")
            ->paginate($this->totalpages);
        return view("{$this->views}.index", compact('datas', 'dataForm'));
    }
   
}