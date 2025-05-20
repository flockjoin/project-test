<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- <link rel="stylesheet" href="{{ asset('../css/custom.css') }}" crossorigin="anonymous"> --}}
        {{-- @vite('resources/css/app.css') --}}
    <style>
        @import 'tailwindcss';

        .containers {
            width: 100%;
        }

        .box-top,.box-mid,.box-bottom {
            width: 100%;
            min-height: 100vh;
        }

        .box-top {
            background-color: black;
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .text-top-show
        {
            position: absolute;
            /* background-color: aqua; */
            font-size: 100px;
            width: 100%;
            text-align: center;
            font-weight: 1000;

            color: transparent;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;

            background-image: url(https://static.thairath.co.th/media/Dtbezn3nNUxytg04ajYeYsNhecVq6MsmPZjjVV2kZr9Spe.jpg);
            animation: bg-animation 30s cubic-bezier(0.3,0,0.7,1) infinite;

        }

        @keyframes bg-animation
        {
            0% {background-position: 0% 0%}
            50% {background-position: 100% 100%}
            100% {background-position: 0% 0%}
        }

        .bubbles
        {
            position: relative;
            display: flex;
        }

        .bubbles span
        {
            position: relative;
            width: 30px;
            height: 30px;
            background: #4fc3dc;
            margin: 0 4px;
            border-radius: 50%;
            box-shadow: 0 0 0 10px #4fc3dc44, 
                        0 0 50px #4fc3dc, 
                        0 0 100px #4fc3dc;
            animation: animate 15s linear infinite;
            animation-duration: calc(120s / var(--i));

        }

        .bubbles span:nth-child(even)
        {
            background: #ff2d75;
            box-shadow: 0 0 0 10px #ff2d7544, 
                        0 0 50px #ff2d75, 
                        0 0 100px #ff2d75;
            animation: animate 15s linear infinite;
            animation-duration: calc(120s / var(--i));
        }

        @keyframes animate
        {
            0%
            {
                transform: translateY(100vh) scale(0);
            }
            100%
            {
                transform: translateY(-10vh) scale(1);
            }
        }

        .box-mid {
            background-color: chocolate;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }


        .mid-boxs
        {
            height: 200px;
            width: 200px;
            background-color: aquamarine;
            border-radius: 5%;
            justify-content: center;
            align-items: center;
            text-align: center;
            align-content: center;
        }

        .box-bottom {
            background-color: darkkhaki;
        }

        @media only screen and (max-width: 800px) {
            .box-top,.box-mid,.box-bottom {
                min-height: 400px;
            }

            .hid-bub {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {
            .hid-bub-min {
                display: none;
            }
        }

    </style>
</head>

<body class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Books-Rent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
