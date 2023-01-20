
<body>
    <nav id="navbarPage" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #3977C3;
            margin:0px;">
        <div class="container d-flex justify-content-between">
            <div>
                <a style="width:80px; height:80px;" class="navbar-brand d-flex align-items-center" href="{{ route('/') }}">
                    <div class="flex items-center justify-items-start h-100">
                    <img class="w-20 h-20 w-auto h-100" src="\img\logoaae.png" alt="logo">
                    </div>
                </a>
            </div>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown" style="margin-left:20px;">
                            <a class="text-white nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-current="page" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acerca de AA</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#about">Sobre nosotros</a>
                                <a class="dropdown-item" href="#">Preguntas frecuentes</a>
                                <a class="dropdown-item" href="#">Alcohólicos Anónimos EC</a>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-left:20px;">
                            <a class="text-white nav-link" href="#MisiónyVisión">Reflexiones diarias</a>
                        </li>
                        <li class="nav-item" style="margin-left:20px;">
                            <a class="text-white nav-link" href="#ubicanos">Contactenos</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="text-white nav-link">DASHBOARD</a>
                                </li>
                            @else
                                <li class="nav-item" style="margin-left:20px;">
                                    <a href="{{ route('login') }}" class="text-white  nav-link btn btn" style="width:100%; border-radius:20px; border:1px solid; ">Iniciar Sesi&oacute;n</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item" style="margin-right:20px;">
                                        <a href="{{ route('register') }}" class="text-white nav-link btn btn" style="background-color: #164580; width:120%; border-radius:20px; margin-left:20px;">Registrate</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </nav>
