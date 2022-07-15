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
                <th scope="col">Nuovo Fumetto</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic['id']}}</td>
                        <td>{{$comic['title']}}</td>
                        <td><img src="{{$comic->thumb ? $comic->thumb : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAM1BMVEXd3d2IiIizs7OdnZ29vb3IyMjY2NjS0tKNjY2oqKiYmJjNzc2Tk5Ojo6PCwsK4uLiurq5k9y1nAAADE0lEQVR4nO3X2ZqjIBCAURFF3GLe/2k7IMXi0l+MmZ6b/9yMY5OCghK0qgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/4lZtFJqqE2885itUrrJ2rgmdm6vBe6egyrj7AIb12Tqu89GXhpfsT37CHf6cGOQ1MwQ7vRXAjdK4oxngWPfzVmQD/J4WTt8xv8Poc0Q7zw/yOM15eY4cJf6fvwS6T3a96R9SO2j+9XRU5qoJmvydhEY33zw4VV9HLhPTaa7eXRSMbMMsw9r38fw09rEF9jbxdWE8ZpJ4uwCd6GJL4q7xfVwwYxEdU+zDQvdSbGN0sSNzRa/bh13YdzFmP/pKRXkM6qOAi/SxKU2301E68lXVBUS6aRfX3RNGElqUtTWLGXS7+q81tr6impDwH3gXoqu/UZtiS7MexunXfqp43xNYdEi/yBMYbAnc9qEed8Hdgktse9vJVKHeV/i/EsCs0xc6jnylbn4bc2a6pAOP98HtnFepNi+YJRHpC7609lI8qvIZWkXtV2qZJEc94FVkcjF0/YsDys70sVEjBwFJyeMbF5/lIjPYz1vLyayFlc88w7z6Itw/zKRLI/Liaw710mFZ3n8RSJ5HptnUo7KlMju4GrPFyTP4yBw+bDff3FMz4eMy8Zhl9vv4cQNp49Iej6OA8dNUI6ab+YRz5N1hI8qHQSViX/K1OFh31dGmcdB4F4m4KHSC+rHzKTKN6gpdN/JescLN7LtAewn0x4V11jmcRA4xuvVxS+EI+ENdOUeWfeSZNuqG2JNu6uhq1p7sPu60Wk/5u3B7t9yQ1wfZxfYr3Bvqt+Oobd1Ktdu7qzRsy+L7fH9XHcs/0/5SdEUgbddtWkSV/pmHtnHToyfhiDLnTrc7FltaOUXpkxyKAJXh4Hjl6eyt19Qyv7CCoTTOu1EIV27ySON3x+LeXGZIm7YknaBzfrdpab7L1p1IezlZpm1rvPg3eutfF62W/3ofrNW1OIuTf6Dggx8F7h9at03J++bAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIC/8ANgshO/t4eBZwAAAABJRU5ErkJggg=='}}"></td>
                        <td>{{$comic['type']}}</td>
                        <td>{{$comic['price']}}$</td>
                        <td>
                            <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">Visualizza Info</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.create', $comic->id)}}">Aggiungi nuovo Fumetto</a>
                            <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">Modifica Fumetto</a>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>

    </div>
    
@endsection