@extends('home')
@section('conteudo')
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
      <h1>Gerir Categorias</h1>
      <hr>
      <div class="col-md-6 mb-2">
        <a href="" class="btn btn-success">Voltar</a>
      </div>
      <div class="row mb-2">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cadastrar Categoria</h3>              
              </div>

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>    
              </div>      
              @endif

              <form action="{{route('categoria-store')}}" class="salvar" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                @include('xlspdf.categoria.formcategoria')
            </form>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection