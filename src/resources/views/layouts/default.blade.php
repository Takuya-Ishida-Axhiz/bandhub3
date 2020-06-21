<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>@yield('title')</title>
</head>
<body>

    <header> 
            <nav class="navbar bg-dark navbar-expand-md shadow-sm mb-5　navbar-prim  ">
                    <a href="/"><img class="navbar-brand img-responsive " width="70" height="70" src = "{{ asset('assets/images/src/logo.png') }}"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"　style="background-color:white;"></span>
                        </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/bands">Band</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="/sheets">Sheet</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/sounds">Sound</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                    </ul>

                    
                    <a href = "/logout" >
                    <p class = "btn btn-outline-light rounded-pill mb-0">Logout</p>
                    </a>
                    
                    </div>
                    
                </div>
            </nav>
    </header>

   @yield('content')
    


   @yield('scripts')
    <div id='app'></div>
</body>
</html>