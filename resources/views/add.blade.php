@extends('layout')

@section('title')Добавление альбома@endsection

@section('main_content')
    <h1>Добавление альбома</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <form method="post" action="/add/check">
        @csrf
        <input type="text" name="artist" id="artist" placeholder="Введите имя исполнителя" class="form-control"><br>
        <input type="text" name="album" id="album" placeholder="Введите название альбома" class="form-control"><br>
        <textarea name="description" id="description" class="form-control" placeholder="Введите описание альбома"></textarea><br>
        <input type="url" name="url" id="url"
       placeholder=" Вставьте ссылку на обложку"
       pattern="https://.*" size="30"
       required><br><br>
        <button type="submit" class="btn btn-success">Добавить</button>
    </form>

@endsection