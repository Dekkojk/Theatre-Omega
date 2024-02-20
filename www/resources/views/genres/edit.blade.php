@extends('layout')
@section('content')
    <div class="container d-flex flex-column justify-content-center"  >
        <h1 class="text-center p-4">Редактировать жанр</h1>
        <form action="{{route('genres.update',$genre)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <input type="text" value="{{$genre->name}}"  name="name" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Редактировать</button>
        </form>
    </div>
@endsection
