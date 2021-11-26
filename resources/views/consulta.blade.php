@extends('template.index')

@section('content')

    <div class="row">
        <div class="col-8 m-auto">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Nome do arquivo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($docs))
                        @foreach ($docs as $item)
                            @php
                                $tipo = $item->find($item->id)->tipo;
                            @endphp
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->nome_arquivo }}</td>
                                <td>{{ $tipo->nome_tipo }}</td>
                                <td>

                                    <a href="{{url("/docs/$item->id/edit")}}" class="btn btn-primary">Editar</a>

                                    <form action="{{ url("/docs/$item->id") }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Deletar" class="btn btn-danger">
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h4 class="text-center">Nenhum resultado encontrado</h4>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="float-end justify-contents">
                {{ $docs->links() }}
            </div>
        </div>
    </div>


@endsection
