<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }
    
    public function store(Request $req)
    {
        Produto::create([
            'nome'       => $req->nome,
            'custo'      => $req->custo,
            'preco'      => $req->preco,
            'quantidade' => $req->quantidade
        ]);

        return "Produto Criado com Sucesso";
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $req, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome'       => $req->nome,
            'custo'      => $req->custo,
            'preco'      => $req->preco,
            'quantidade' => $req->quantidade
        ]);

        return "Produto Atualizado com Sucesso";
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Excluído com Sucesso";
    }
}
