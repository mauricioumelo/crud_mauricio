@extends('template.index')

@section('content')

    <div class="row">
        <div class="col-6 m-auto">
            <div class="text-center"><h1>Editar</h1></div>
            @if(isset($errors) && count($errors) >0)
            
                <div class="container alert alert-danger">
                    @foreach ($errors->all() as $item)
                        {{$item}}<br>
                    @endforeach
                    
                </div>
            @endif
            <form action="{{url("/docs/$doc->id")}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="" value="{{$doc->titulo}}">
                    <label for="titulo" >Titulo</label>
                  
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$doc->nome_arquivo}}" >
                    <label for="nome" >Nome do arquivo</label>
                </div>
                <div class="mb-3 form-floating">
                  
                  
                  <select name="tipo" id="tipo" class="form-control " required>
                      <option value=""  disabled>Tipo Do arquivo...</option>

                      @foreach ($tipos as $tipos)
                          <option value="{{$tipos->id}}" @if ($tipos->id == $doc->id) selected @endif> {{$tipos->nome_tipo}}</option>
                      @endforeach

                  </select>
                  <label for="tipo">Tipo de documento</label>
                </div>
                <a href="{{url("/docs")}}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </form>
        </div>
    </div>
@endsection
