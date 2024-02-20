@extends('layout')

@section('content')
    <div class="container d-flex flex-row gap-4 flex-wrap">
        <h2>Жанры</h2>
        <a class="btn btn-dark" style="text-decoration: none;" href="{{route('genres.create')}}">Добавить жанр</a>
    </div>
    <table class="table">
        <tr>
            <td>#</td>
            <td>name</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach($genres as $genre)
            <tr>
                <td>
{{--        <img src="{{Storage::url($performance->img)}}" cl</td>--}}
                <td>{{$genre->name}}</td>
                <td><a class="btn btn-dark" href="{{route('genres.edit',$genre)}}">Редактировать</a></td>
                <td><form action="{{route('genres.destroy',$genre)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-dark" type="submit">Удалить</button>
                    </form></td>
            </tr> @endforeach

    </table>
    </div>
@endsection
