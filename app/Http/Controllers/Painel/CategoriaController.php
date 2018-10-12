<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Painel\StandardController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Category;

class CategoriaController extends StandardController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $views = 'painel.modulos.categorias';
    protected $rotas = 'categorias';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
   
}