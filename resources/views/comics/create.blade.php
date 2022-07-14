@extends('layouts.base')

@section('head-title')
    Creazione Fumetto
@endsection

@section('page-content')
    <div class="container my-3">
        <a class="btn btn-success" href="{{route('comics.index')}}">Torna alla Home</a>
        <h1 class="my-4">Aggiungi un nuovo fumetto:</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            
            <div class="mb-4">
              <label class="fw-bold" for="title">Titolo:</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="description">Descrizione:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="thumb">Immagine:</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="price">Prezzo:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="sale_date">Periodo di sconto:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-4">
                <label class="fw-bold" for="type">Tipo di serie:</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Scegli una opzione</option>
                    <option value="1">comic book</option>
                    <option value="2">graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 

    </div>
    
@endsection