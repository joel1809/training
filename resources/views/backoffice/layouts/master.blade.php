<!DOCTYPE HTML>
<html class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyImdb | @yield('title', 'MyImdb')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <!-- custom css -->
    <link href="/build/backoffice/css/dashboard.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <!-- begin header -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0
    shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('backoffice.homepage')}}">MyImdb
            Backoffice</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" ariacontrols="sidebarMenu" aria-expanded="false"
            aria-label="Toggle
    navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <!-- end header -->
    <div class="container-fluid">
        <div class="row">
            <!-- begin left sidebar -->
            <div id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light
    sidebar collapse">
                @section('sidebar')
                    {{-- Navigation menu --}}
                    @include('backoffice.partials._menu', [
                        'items' => [

                            [
                                'link' => route('backoffice.homepage'),
                                'title' => 'Home page',
                            ],
                            [
                                'link' => route('backoffice.movies.index'),
                                'title' => 'List of movies',
                            ],
                        ],
                    ])
                @show
            </div>
            <!-- end left sidebar -->
            <!-- begin main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="mt-3 mb-3 border-bottom">
                    <h2 class="h2">@yield('main_title')</h2>
                </div>
                @yield('content')
            </main>
            <!-- end main content -->
        </div>
    </div>
    <!-- begin footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">
                <p>&copy; 2021 MyImdb.com
                <p>
            </span>
        </div>
    </footer>
    <!-- end footer -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
    </html>
