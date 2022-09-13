@extends('layout')

@section('title')Альбомы@endsection

@section('main_content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <h1>Все альбомы</h1><br>
    @foreach($albums->reverse() as $el)
        <div class="alert alert-warning">
        <p><img src="{{ $el->url }}" alt="Обложка"
             width="100" height="100"></p>
            <h3>{{ $el->album }}</h3>
            <b>{{ $el->artist }}</b>
            <p>{{ $el->description }}</p>
        </div>
    @endforeach
    
@endsection