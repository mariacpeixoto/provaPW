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

use App\Models\Compra;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-compras', function(Request $request) {
    //dd($request->all());

    Compra::create([
        'nome' => $request->nome,
        'nomeproduto' => $request->nomeproduto,
        'valor' => $request->valor
    ]);
    echo "Compra realizada com sucesso!";
});

Route::get('/listar-compras/{id}', function($id) {
    //dd(Produto::find($id)); //degub and die
    $compra = Compra::find($id);
    return view('listar', ['compra' => $compra]);
});

Route::get('/editar-compras/{id}', function($id) {
    //dd(Produto::find($id)); //degub and die
    $compra = Compra::find($id);
    return view('editar', ['compra' => $compra]);
});

Route::post('/editar-compras/{id}', function(Request $request, $id) {
    //dd($request->all());
    $compra = Compra::find($id);

    $compra->update([
        'nome' => $request->nome,
        'nomeproduto' => $request->nomeproduto,
        'valor' => $request->valor
    ]);
    echo "Compra editada com sucesso!";
});

Route::get('/excluir-compras/{id}', function($id) {
    //dd(Produto::find($id)); //degub and die
    $compra = Compra::find($id);
    $compra->delete();

    echo "Compra excluída com sucesso!";
});

