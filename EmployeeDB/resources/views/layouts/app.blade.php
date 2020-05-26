<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
  
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <div class="container">
                <form>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                            <div class="searchbox">
                                <label for="inputEmail4">Personnel Number</label>
                                <input class="form-control mr-sm-2" type="search" placeholder="personnel number" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Claim Number</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Claim number">
                        </div>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">EmployeeName</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="employee name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Designation</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Designation">
                        </div>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputAddress">Basic Pay(as on 01-04-2019)</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Place of Duty</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Place of Duty">
                        </div>
                        <hr>
                    </div>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-6">
                        <label for="inputAddress">Name of Patient</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Relationship With Employee</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                        </div>
                    </div>
                   

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
