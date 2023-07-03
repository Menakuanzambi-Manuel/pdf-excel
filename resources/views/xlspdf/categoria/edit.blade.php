@extends('home')
@section('conteudo')
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
      <h1>Gerir Categorias</h1>
      <hr>
      <div class="col-md-6 mb-2">
        <a href="{{route('categoria-index')}}" class="btn btn-success">Voltar</a>
      </div>
      <div class="row mb-2">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Actualizar categoria</h3>              
              </div>

              <form action="{{route('categoria-update', $categorias->id)}}" class="actualizar" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

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