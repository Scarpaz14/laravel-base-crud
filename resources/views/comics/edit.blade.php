@extends('layouts.base')

@section('head-title')
    Modifica {{$comic['title']}}
@endsection

@section('page-content')
    <div class="container my-3">
        <a class="btn btn-success" href="{{route('comics.index')}}">Torna alla Home</a>
        <h1 class="my-4">Modifica: {{$comic['title']}}</h1>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
              <label class="fw-bold" for="title">Titolo:</label>
              <input type="text" class="form-control" required id="title" name="title" value="{{$comic['title']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="description">Descrizione:</label>
                <input type="textarea" class="form-control" required id="description" name="description" value="{{$comic['description']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic['thumb']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="price">Prezzo:</label>
                <input type="number" class="form-control"  id="price" name="price" placeholder="Max: 99.99$" value="{{$comic['price']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic['series']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="sale_date">Periodo di sconto:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Example:2019-04-10" value="{{$comic['sale_date']}}">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="type">Tipo di serie:</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Scegli una opzione</option>
                    <option value="comic book"{{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                    <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 

    </div>
    
@endsection