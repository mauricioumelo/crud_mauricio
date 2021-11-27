@extends('template.index')

@section('content')

    <div class="row">
        <div class="col-6 m-auto">
            <div class="text-center"><h1>Cadastro</h1></div>
            @if(isset($errors) && count($errors) >0)
            
                <div class="container alert alert-danger">
                    @foreach ($errors->all() as $item)
                        {{$item}}<br>
                    @endforeach
                    
                </div>
            @endif
            <form action="{{url("/docs")}}" method="POST">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="" >
                    <label for="titulo" >Titulo</label>
                  
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="nome" name="nome" >
                    <label for="nome" ">Nome do arquivo</label>
                </div>
                <div class="mb-3 form-floating">
                  
                  
                  <select name="tipo" id="tipo" class="form-control " required>
                      <option value="" selected disabled>Tipo Do arquivo...</option>

                      @foreach ($tipos as $tipos)
                          <option value="{{$tipos->id}}"> {{$tipos->nome_tipo}}</option>
                      @endforeach

                  </select>
                  <label for="tipo">Tipo de documento</label>
                </div>
                <a href="{{url("/docs")}}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
              </form>
        </div>
    </div>
@endsection
