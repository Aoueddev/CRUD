<?php
use App\Http\Controllers\ProdutoController;
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

Route::get("/", function(){
  return redirect()-> route("produtos.index");
});
//Route::resource('produtos', ProdutoController::class);
Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::get('produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');


Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');


Route::get('produtos/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');


Route::put('produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');


Route::delete('produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');