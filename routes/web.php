<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Criando váriavel para retornar na view
    $nome = 'Gabriel';
    $idade = 22;

    $array = [10, 20, 30, 40, 50];

    $nomes = ['Matheus', 'Maria', 'João', 'Saulo'];

    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador PHP',
            'array' => $array,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {
    return view('products');
});

Route::get('/produtos/{id}', function($id) {
    return view('product', ['id' => $id]);
});

Route::get('/produtosTeste/{id?}', function($id = null) {
    return view('product', ['id' => $id]);
});
