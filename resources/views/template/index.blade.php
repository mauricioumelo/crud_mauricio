<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DocsOn</title>

        

        <!-- Styles -->
       {{-- <link rel="stylesheet" href="{{asset("css/app.css")}}"> --}}
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        
    </head>
    <body >

        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{url("/")}}">DocsOn</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url("/docs")}}">Consulta</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url("/docs/create")}}">Cadastrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url("/questoes")}}">Questões</a>
                      </li>
                      
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        

        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        {{-- <script src="{{asset("js/app.js")}}"></script> --}}
    </body>
</html>
