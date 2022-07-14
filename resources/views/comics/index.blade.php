@extends('layouts.base')

@section('head-title')
    Comics
@endsection

@section('page-content')
    <div class="container">
        <h1>Tutti i fumetti:</h1>
        @dump($comics)

    </div>
    
@endsection