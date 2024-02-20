@extends('layout')

@section('content')


    <div class="container d-flex flex-column justify-content-center"  >
        <h1 class="text-center p-4">Добавить спектакль</h1>
        <form action="{{route('performances.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h1>Название</h1>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Дата</h1>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Возраст</h1>
                <input type="number" name="age" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Фото</h1>
                <input type="file" name="img" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Жанры</h1>
                <select class="form-select" name="genre[]" multiple>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <h1>Цена</h1>
                <input type="text" name="price" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection
