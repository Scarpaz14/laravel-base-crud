@extends('layouts.base')

@section('head-title')
    Comics
@endsection

@section('page-content')
    <div class="container">
        <h1>Tutti i fumetti:</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Immagine</th>
                <th scope="col">Tipo di fumetto</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Info</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic['id']}}</td>
                        <td>{{$comic['title']}}</td>
                        <td><img src="{{$comic['thumb']}}"></td>
                        <td>{{$comic['type']}}</td>
                        <td>{{$comic['price']}}$</td>
                        <td>
                            <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">Visualizza Info</a>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>

    </div>
    
@endsection