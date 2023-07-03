<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Exports\ExportCategoria;
use Maatwebsite\Excel\Facades\Excel;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('xlspdf.categoria.index', compact('categorias'));
    }

    public function create(){
        return view('xlspdf.categoria.create');
    }

    public function store(Request $request){
        /*$request->validate([
            'nome' => ['required', 'max:100'],
            'descricao' => ['required', 'max:200'],
            'imagem' => ['required', 'mimes:jpg,png,jpeg'],
            'data' => 'required'
        ]); */

        $categorias = new Categoria;
        
        $categorias->nome = $request->input('nome');
        $categorias->descricao = $request->input('descricao');
        $categorias->save();
        return redirect()->route('categoria-index')->with('salvar', 'ok');
    }

    public function edit($id){
        $categorias = Categoria::find($id);
        return view('xlspdf.categoria.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categorias = Categoria::find($id);
        
        
        $categorias->nome = $request->input('nome');
        $categorias->descricao = $request->input('descricao');
        $categorias->update();
        return redirect()->route('categoria-index')->with('actualizar', 'ok');
    }

    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();
        return redirect()->route('categoria-index')->with('eliminar', 'ok');
    } 

    public function export(Request $request){
        return Excel::download(new ExportCategoria, 'categorias.xlsx');
    }

}
