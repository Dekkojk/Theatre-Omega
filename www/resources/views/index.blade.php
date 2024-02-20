@extends('layout')

@section('title')
    Мини-театр "Омега"
@endsection

@section('content')
    <div class="container d-flex flex-column justify-content-center "  >
{{--        <div class="container-fluid  d-flex justify-content-center  gap-4 p-3 align-items-center">--}}

{{--            <a class="navbar-brand" href="#">Афиша</a>--}}
{{--            <a class="navbar-brand" href="#">О нас</a>--}}
{{--            <a href=""><img class="logo"  src="img/images.png" style="width: 100px"  alt=""></a>--}}
{{--            <a class="navbar-brand" href="#">Где нас найти?</a>--}}
{{--            <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Вход</a>--}}
{{--        </div>--}}

        <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5">
            <div class="carousel-indicators">
                <button type="button"    data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button"    data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button"   data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/5f8410c42fa84dcaa496db8346e9.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">esfesfesf</h5>
                        <p style="color: white">esfesfesf</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/0411ab9b5ae748e68e300adc2728.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5 style="color: white">esfesfesf</h5>
                        <p style="color: white">esfesfesf</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/15101ca0377645c89ef211e69366.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">esfesfesf</h5>
                        <p style="color: white">esfesfesf</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container" style="margin-top: 80px">
            <h1 style="text-align: center">Омега - театр, где мечты становятся реальностью. Присоединяйтесь к нам на пути к блестящим открытиям!</h1>
        </div>
        </div>
@endsection
