<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class produtoController extends Controller
{
  
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

     public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));

    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect()->route('produtos.index');
    }
}
