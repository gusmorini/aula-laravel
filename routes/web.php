<?php

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes... Estas rotas podem ser excluidas, caso em sua regra de negocio
// não exista o auto cadastro do usuário.
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

/*
 * Routes Sites
 */
Route::get('/contato', 'Site\SiteController@contato');
Route::get('/empresa', 'Site\SiteController@empresa');
Route::any('/post/{id}', 'Site\SiteController@post');
Route::get('/posts/{id}', 'Site\SiteController@posts');
Route::get('/categoria', 'Site\SiteController@categoria');
Route::get('/', 'Site\SiteController@index');





/****************************************************************************************
 * Rotas do Painel
****************************************************************************************/
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function (){
    
    //Usuários
    Route::any('/usuarios/pesquisar', 'Painel\UserController@search')->name('usuarios.search');
    Route::resource('/usuarios', 'Painel\UserController');

   //Categorias
   Route::any('/categorias/pesquisar', 'Painel\CategoriaController@search')->name('categorias.search');
   Route::resource('/categorias', 'Painel\CategoriaController');

   //Posts
   Route::any('/posts/pesquisar', 'Painel\PostController@search')->name('posts.search');
   Route::resource('/posts', 'Painel\PostController');

   //Raiz painel
   Route::get('/', 'HomeController@index')->name('home');

});