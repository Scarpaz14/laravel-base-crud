@extends('layouts.base')

@section('head-title')
    Comics Info
@endsection

@section('page-content')
    <div class="container my-3">
        <a class="btn btn-success" href="{{route('comics.index', $comic->id)}}">Torna alla Home</a>
        <h1>Info del fumetto:</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Serie</th>
                <th scope="col">Periodo di sconto</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$comic['id']}}</td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                </tr>
            </tbody>
          </table>

    </div>
    
@endsection