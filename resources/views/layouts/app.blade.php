<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-body">
<div class="container-xxl">
    <div class="nav-menu">
        <nav class="row navbar-custom navbar-expand-lg navbar-light bg-light">
            <div class="col-md-9 @if(!Auth::user()) col-lg-10 @else col-lg-8 @endif col-sm-8 col-10">
                <div id="navbar-div" class="row">
                    <div class="mt-3 col-md-3 col-sm-4 col-4" id="button-div">
                        <button class="navbar-toggler" id="burger" type="button" data-bs-toggle="collapse"
                                data-bs-target="#menu" aria-controls="menu"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-md-9 col-lg-12 col-sm-6 col-6" id="navbar">
                        <div class="row">
                            <div class="col-4">
                                <a href="/"><img src="images/logo.png" class="col" alt="" id="logo"></a>
                            </div>
                            <div class="collapse navbar-collapse col-8">
                                <ul class="nav navbar-nav d-flex">
                                    <li><a
                                            <?php if (stripos($_SERVER['REQUEST_URI'], 'user-video') !== false) {
                                                echo 'class="active"';
                                            } ?> href="/user-video">Users Video</a></li>
                                    <li><a <?php if (stripos($_SERVER['REQUEST_URI'], 'users') !== false) {
                                            echo 'class="active"';
                                        } ?> href="">Users</a></li>
                                    <li><a
                                            <?php if (stripos($_SERVER['REQUEST_URI'], 'Benefactors-fond') !== false) {
                                                echo 'class="active"';
                                            } ?> href="">Benefactors Fond</a></li>
                                    <li><a
                                            <?php if (stripos($_SERVER['REQUEST_URI'], 'benefactors') !== false) {
                                                echo 'class="active"';
                                            } ?> href="/benefactors">Benefactors</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-2">
                <div class="row navbar-right">
                    @if(!\Auth::user())
                        <div class="col-4">
                            <button id="login" class="btn btn-login"><a href="/login"
                                                                        class="text-decoration-none text-white">Login</a>
                            </button>
                        </div>
                    @else
                        <div class="col-4">
                            <button class="btn btn-chat">Chat</button>
                        </div>
                        <div class="dropdown col-6">
                            <button class="btn btn-secondary dropdown-toggle btn-login" type="button"
                                    id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth::user()->name}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <form action="logout" method="POST">
                                    @csrf
                                    <li><a class="dropdown-item" href="#">
                                            <button class="btn" type="submit">Log Out</button>
                                        </a></li>
                                </form>
                                <li><a class="dropdown-item btn" href="/profile">Profile</a></li>
                            </ul>
                        </div>
                    @endif
                    <div class="language @if(!\Auth::user()) col-6 @else col-2 @endif">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown d-none d-sm-block">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Eng
                                </a>
                                <ul class="dropdown-menu language-dropdown d-xs-none d-xs-block"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Eng</a></li>
                                    <li><a class="dropdown-item" href="#">Rus</a></li>
                                    <li><a class="dropdown-item" href="#">Arm</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div>
            <nav class="navbar-custom navbar-expand-lg navbar-light bg-light">
                <div class="d-flex justify-content-between ">
                    <div class="collapse navbar-collapse ms-2" id="menu">
                        <ul class="nav navbar-nav row">
                            <li class="li col"><a class="active" href="">User Video</a></li>
                            <li class='col'><a href="">Users</a></li>
                            <li class="col"><a href="">Benefactors Fond</a></li>
                            <li class="col"><a href="">Benefactors</a></li>
                        </ul>
                        <div class="d-flex">
                            <label class="mt-2" for="">Language</label>
                            <ul class="navbar-nav ms-2">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Eng
                                    </a>
                                    <ul class="dropdown-menu language-dropdown d-xs-none d-xs-block"
                                        aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Eng</a></li>
                                        <li><a class="dropdown-item" href="#">Rus</a></li>
                                        <li><a class="dropdown-item" href="#">Arm</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@yield('main')
</body>
</html>
