<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class UserController extends StandardController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $views = 'painel.modulos.usuario';
    protected $rotas = 'usuarios';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function search(Request $request)
    {
        //Recupera os dados do formulário
        $dataForm = $request->get('pesquisa');

        //Filtra os usuários
        $users = $this->model
            ->where('name', 'LIKE', "%{$dataForm}%")
            ->orWhere('email', 'LIKE', "%{$dataForm}%")
            ->paginate($this->totalpages);

        return view("painel.modulos.usuario.index", compact('users', 'dataForm'));
    }
}
