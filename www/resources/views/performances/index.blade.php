@php
    use App\Enums\RoleEnum;
    use Illuminate\Support\Facades\Storage;
@endphp
@extends('layout')
@section('style')
    <style>
        .age{
            background-color: #000000;
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            position: absolute;
            left: 240px;
            top: 5px;
            padding: 5px;
        }
    </style>
@endsection
@section('content')
    <a class="btn btn-dark" style="text-decoration: none;" href="{{route('performances.create')}}">Добавить
        спектакль</a>
    <div class="container d-flex flex-row gap-4 flex-wrap ">


        @foreach($performances as $performance)
            <div class="card mt-3" style="width: 18rem;">
                <div class="age">{{$performance->age}}+</div>
                <img src="{{Storage::url($performance->img)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$performance->name}}</h5>
                    <p class="card-text" style="font-size: 16px">Жанр(ы): {{$performance->genres()->implode('name',', ')}}</p>
                    <p class="card-text" style="font-size: 16px">Цена: {{$performance->price}} руб.</p>
                    <a href="{{route('performances.show', $performance)}}" class="btn btn-dark">Подробнее</a>
                    @if(auth()->user()?->role == RoleEnum::ADMIN->value)
                        <a href="" class="btn btn-dark">Удалить</a>
                    @endif

                </div>
            </div>
        @endforeach


    </div>
@endsection
