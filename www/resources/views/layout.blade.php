@php use App\Enums\RoleEnum; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container"  style="font-size: 22px">
    <div class="container-fluid  d-flex justify-content-center  gap-4 p-3 align-items-center">
        @if(auth()->user()?->role == RoleEnum::ADMIN->value)
            <a class="navbar-brand" href="/genres">Жанры</a>
            <a class="navbar-brand" href="/performances">Спектакли</a>
        @else

        <a class="navbar-brand" href="/performances">Афиша</a>
        <a class="navbar-brand" href="">О нас</a>
        <a href="/"><img class="logo"  src="img/images.png" style="width: 100px"  alt=""></a>
        <a class="navbar-brand" href="">Где нас найти?</a>
        @endif

        @auth()
            <a class="btn btn-dark" href="{{route('logout')}}">Выход</a>
        @endauth

        @guest()
        <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Вход</a>
        @endguest
    </div>

    @yield('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex flex-column justify-content-center"  >
                        <form action="{{route('login')}}" method="post" style="width: 350px" class="align-self-center">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Логин</label>
                                <input type="text"  name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="modal-footer d-flex  justify-content-center p-3">
                                <button type="submit" class="btn btn-dark">Вход</button>
                                <a class="btn btn-dark" style="color: white" data-bs-toggle="modal" data-bs-target="#registerModal">Регистрация</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container d-flex flex-column justify-content-center"  >
                        <form action="{{route('register')}}" method="post" style="width: 350px" class="align-self-center">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">ФИО</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Логин</label>
                                <input type="text"  name="login" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="modal-footer d-flex  justify-content-center p-3">
                                <button type="submit" class="btn btn-dark">Зарегистрироваться</button>
                                <a class="btn btn-dark" style="color: white" data-bs-toggle="modal" data-bs-target="#exampleModal">Авторизация</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer>
    <div class="container d-flex justify-content-center  gap-4 p-5 align-items-center" style="margin-top: 200px">
        <div class="logo">
            <a href="/"><img class="logo"  src="img/images.png" style="width: 150px"  alt=""></a>
        </div>
        <div class="container-fluid  d-flex justify-content-center  gap-4 p-3 align-items-center" style="font-size: 22px">
            @if(auth()->user()?->role == RoleEnum::ADMIN->value)
                <a class="navbar-brand" href="/genres">Жанры</a>
                <a class="navbar-brand" href="/performances">Спектакли</a>
            @else

                <a class="navbar-brand" href="/performances">Афиша</a>
                <a class="navbar-brand" href="">О нас</a>
{{--                <a href="/"><img class="logo"  src="img/images.png" style="width: 100px"  alt=""></a>--}}
                <a class="navbar-brand" href="">Где нас найти?</a>
            @endif
        </div>
    </div>
</footer>

</div>

</body>
</html>
