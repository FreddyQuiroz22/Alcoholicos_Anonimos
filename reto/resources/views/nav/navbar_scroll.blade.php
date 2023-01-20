<head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
 
    <style>
        .dropdown-menu{
            background: #3977C3;
            margin:0px;
            

        }
        .dropdown-item{
            
            padding-top:10px;
            padding-bottom:10px;
            margin-top:10px;
            margin-bottom:10px;
            color: #FFFFFF;
            text-align:center;
        }
        .nav-item{
            margin-left:20px;
        }

        .bgcolor.scrolled{

            background: #3977C3;

        }

        .home{
            display: flex;
            flex-wrap: wrap;
            text-align:center;

        }
        .in-flex{
            flex:1;
            min-width: 300px;
            padding-right:10px;
            
        }
        .left{
            position:relative;
            left:-120px;
        }
        

        nav div div div ul li a:hover{
            border-radius:20px;
            background: #3977C3;
        }
        .bg{
            background-color: white;
            border-radius:50px;
        }
    </style>
</head>
<body>
    <nav id="navbarPage" class="navbar navbar-expand-lg navbar-dark fixed-top bgcolor">
        <div class="container d-flex justify-content-between container-fixed-top">
            <div>
                <a style="width:60px; height:60px;" class="navbar-brand d-flex align-items-center" href="{{ route('/') }}">
                    <div class="flex items-center justify-items-start h-100">
                        <img class="w-15 h-15 w-auto bg" src="..\img\logoeaa.png" alt="logo">
                    </div>
                </a>
            </div>
            <div class="h">
                <button class="navbar-toggler open-menu mobile-only center" style="margin-top:10px; float:right; " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <br>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right home" id="navbarNav">
                    <ul class="navbar-nav me-auto in-flex">
                        <li class="nav-item dropdown">
                        
                            <a class="text-white nav-link dropdown-toggle " id="navbarDropdown" role="button" aria-current="page" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acerca de AA</a>
                            <div class="dropdown-menu left" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('sobre_nosotros') }}">Sobre nosotros</a>
                                <a class="dropdown-item" href="{{ route('preguntas_frecuentes') }}">Preguntas frecuentes</a>
                                <a class="dropdown-item" href="#">Alcohólicos Anónimos EC</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="#MisiónyVisión">Reflexiones diarias</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="#ubicanos">Contactenos</a>
                        </li><br>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/home') }}" class="text-white nav-link">DASHBOARD</a>
                                </li>
                            @else
                                <li class="nav-item" >
                                    <a href="{{ route('login') }}" class="text-white nav-link btn btn" style="width:100%; border-radius:20px; border:1px solid; ">Iniciar Sesi&oacute;n</a>
                                </li>
                                <br>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="text-white nav-link btn btn" style="background-color: #164580; width:120%; border-radius:20px;">Registrate</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <script>
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>200);
        })
    </script>

