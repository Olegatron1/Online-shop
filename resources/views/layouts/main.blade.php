<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .sidebar {
            height: 100vh;
            width: 200px;
            background-color: #374050;
        }

        .navbar {
            background-color: #ffffff;
            width: 100%;
        }

        body {
            background-color: #F2F6FA;
        }

        /* Изменяем цвет подсветки при наведении на красный */
        .navbar-brand:hover {
            color: red;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <div
                            style="background-color: white; padding: 24px; border-radius: 0 0 10px 0; margin-left: -10px;">
                            <img src="https://i.postimg.cc/fb7vQNwY/1.png" alt="логотип">
                        </div>
                    </div>
                    <div class="text" style="color: white;">
                        <div>Enterprise</div>
                        <div>Resource</div>
                        <div>Planning</div>
                    </div>
                </div>
                <a href="{{ route('index') }}" class="btn text-white m-lg-3">Продукты</a>
            </nav>
            <!-- Main content -->
            <main class="col-md-10 p-0 m-0">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            Product
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <!-- Content -->
                <div class="content">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
        var attributeCount = 0;

        $("#addAttribute").click(function () {
            attributeCount++;
            var newAttribute = `
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="data[]" placeholder="Название атрибута">
                            <input type="text" class="form-control" name="data[]" placeholder="Значение атрибута">
                            <button class="btn btn-danger removeAttribute"></button>
                        </div>
                    </div>`;
            $("#attributes").append(newAttribute);
        });

        $(document).on('click', '.removeAttribute', function () {
            $(this).closest('.form-group').remove();
        });
    });
</script>
</body>
</html>
