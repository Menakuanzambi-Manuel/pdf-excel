<?php

namespace App\Http\Controllers\pdf;

use PDF;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class GerarPdfController extends Controller{

    public function __invoke(){

        $categorias = Categoria::all();

        $pdf = Pdf::loadView('xlspdf.categoria.listapdf', compact('categorias'));
        return $pdf->download('categorias.pdf');
    }
}