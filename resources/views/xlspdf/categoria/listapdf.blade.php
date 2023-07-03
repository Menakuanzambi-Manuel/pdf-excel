@extends('xlspdf.layouts.pdf')

@section('conteudo')

<table class="table table-hover ">
    <thead style="text-align: center">
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody style="text-align: center">

      @forelse ($categorias as $categoria)
      <tr>
        <td>{{$categoria->nome}}</td>
        <td>{{$categoria->descricao}}</td>                                   
      </tr>
        @empty
         <h2 style="color: red" class="text-center">Nenhuma Categoria Cadastrado meu caro...</h2> 
        @endforelse

    </tbody>
  </table>
    
@endsection