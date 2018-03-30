<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/listar', 'ProdutoController@listar');

Route::post('/produtos/listar', 'ProdutoController@listar');

