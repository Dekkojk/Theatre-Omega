@extends('layout')
@section('content')
    <div class="container d-flex flex-column justify-content-center"  >
        <h1 class="text-center p-4">Добавить жанр</h1>
        <form action="{{route('genres.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text"  name="name" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection
