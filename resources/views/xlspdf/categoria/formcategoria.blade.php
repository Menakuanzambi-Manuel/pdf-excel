    <div class="card-body">
        <div class="row">
          <div class="form-group col-4">
            <label for="">Nome Categoria</label>
            <input type="text" class="form-control" autofocus autocomplete="off" name="nome" value="{{@$categorias->nome}}" placeholder="nome categoria">
          </div>
          {{-- <div class="form-group col-6">
            <label for="">Descrição</label>
            <input type="text" class="form-control" autocomplete="off" name="descricao" placeholder="...">
          </div> --}}
              <div class="col-md-12">
                <label for="">Descrição Categoria</label>
                <textarea id="summernote" name="descricao">{{@$categorias->descricao}}
                </textarea>
              </div>
        </div>
        <div class="float-right">
            <button type="reset" class="btn btn-secondary">Cancelar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
  





    
    
    
  