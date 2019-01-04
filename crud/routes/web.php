<?php

Route::get('/',['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/contato',['as' => 'site.contato', 'uses' => 'Site\ContatoController@index']);
Route::post('/enviar',['as' => 'site.contato.enviar', 'uses' => 'Site\ContatoController@sendEmail']);
Route::get('/noticias/{id}', ['as' => 'site.ler.noticias','uses'=>'Site\HomeController@lerNoticias']);

/* rotas page login*/
Route::get('/login', ['as' =>'site.login','uses' => 'Site\LoginController@index']);
Route::get('/login/sair', ['as' =>'site.login.sair','uses' => 'Site\LoginController@sair']);
Route::post('/login/entrar', ['as' =>'site.login.entrar','uses' => 'Site\LoginController@entrar']);

/* rotas painel adm 
* rota admin.minhas.noticias:
* - lista todas as noticias cadastradas
* - poderá realizar as seguintes acoes: editar, deletar e adicionar
*/

Route::group(['middleware'=>['auth']], function(){
    /*rotas perfil */
    Route::get('/admin/perfil', ['as'=> 'admin.meuperfil', 'uses'=>'Admin\UsuarioController@perfil']);

    /* rotas page usuario*/
    Route::get('/admin/novoUsuario', ['as' => 'admin.usuario.adicionar', 'uses'=>'Admin\UsuarioController@index']);
    Route::get('/admin/usuarios', ['as' => 'admin.usuario', 'uses'=>'Admin\UsuarioController@verUsuario']);
    Route::get('/admin/usuarios/deletar/{id}', ['as' => 'admin.usuario.deletar', 'uses'=>'Admin\UsuarioController@deletar']);
    Route::post('/admin/usuario/salvar', ['as' => 'admin.usuario.salvar','uses'=>'Admin\UsuarioController@salvarUsuario']);
    Route::get('/admin/usuario/editar/{id}', ['as' => 'admin.usuario.editar','uses'=>'Admin\UsuarioController@editar']);
    Route::put('/admin/usuario/atualizar/{id}', ['as' => 'admin.usuario.atualizar','uses'=>'Admin\UsuarioController@atualizar']);

    /* rotas page noticias*/
    Route::get('/admin/minhas/noticias', ['as' => 'admin.minhas.noticias','uses'=>'Admin\NoticiaController@mynews']);
    Route::post('/admin/noticias/pesquisar', ['as' => 'admin.noticias.pesquisar','uses'=>'Admin\NoticiaController@mynews']);
    Route::get('/admin/dashboard', ['as' => 'admin.noticias','uses'=>'Admin\NoticiaController@index']);
    Route::get('/admin/noticias/adicionar', ['as' => 'admin.noticias.adicionar','uses'=>'Admin\NoticiaController@adicionar']);
    Route::get('/admin/noticias/editar/{id}', ['as' => 'admin.noticias.editar','uses'=>'Admin\NoticiaController@editar']);
    Route::get('/admin/noticias/deletar/{id}', ['as' => 'admin.noticias.deletar','uses'=>'Admin\NoticiaController@deletar']);
    Route::post('/admin/noticias/salvar', ['as' => 'admin.noticias.salvar','uses'=>'Admin\NoticiaController@salvar']);
    Route::put('/admin/noticias/atualizar/{id}', ['as' => 'admin.noticias.atualizar','uses'=>'Admin\NoticiaController@atualizar']);
});

