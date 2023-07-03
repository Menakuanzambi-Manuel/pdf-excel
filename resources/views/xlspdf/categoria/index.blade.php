@extends('home')
@section('conteudo')
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
      <h1>Gerir Categorias</h1>
      <hr>
      <div class="col-md-6 mb-2">
        <a href="{{route('categoria-create')}}" class="btn btn-success">Novo</a>
      </div>
      <div class="row mb-2">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de Categorias</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>........</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($categorias as $categoria)
                    <tr>
                      <td>{{$categoria->nome}}</td>
                      <td>{{$categoria->descricao}}</td>
                      <td class="d-flex">
                        <form action="{{route('categoria-destroy', $categoria->id)}}" class="eliminar" method="POST">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                             
                             <a href="{{route('excel')}}" type="submit" class="btn btn-secondary btn-xs"><i class="bi bi-filetype-xls"></i></a>
                             <a href="{{route('pdf')}}" type="submit" class="btn btn-success btn-xs"><i class="bi bi-file-pdf"></i></a>
                             <a href="{{route('categoria-edit', $categoria->id)}}" type="submit" class="btn btn-primary btn-xs"><i class="bi bi-pencil-square"></i></a>
                          <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                        </form>  
                      </td>                                   
                    </tr>
                      @empty
                       <h2 style="color: red" class="text-center">Nenhuma Categoria Cadastrado meu caro...</h2> 
                      @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
