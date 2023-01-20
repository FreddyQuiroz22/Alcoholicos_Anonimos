<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alcohólicos Anónimos es una comunidad de hombres y mujeres que comparten su mutua experiencia, fortaleza y esperanza para resolver su problema común y ayudar a otros a recuperarse del alcoholismo. 
    El único requisito para ser miembro de A.A. es el deseo de dejar la bebida. Para ser miembro de A.A. no se pagan honorarios ni cuotas; nos mantenemos con nuestras propias contribuciones. 
    A.A. no está afiliada a ninguna secta, religión, partido político, organización o institución alguna; no desea intervenir en controversias; 
    no respalda ni se opone a ninguna causa. Nuestro objetivo primordial es mantenernos sobrios y ayudar a otros alcoholicós a alcanzar el estado sobriedad.">
    <meta name="keywords" content="Acerca de Alcohólicos Anónimos, ubicación de Alcohólicos Anónimos Ecuador, 
    Alcohólicos Anónimos oficial, Parque Centenario, 
    Avenida Nueve de Octubre, Guayas Guayaquil, Lorenzo Garaicoa, Nueve de octubre y Lorenzo Garaicoa, 
    Nueve de Octubre y Rumichaca, Misión, Visión, Contacto, Alcohólicos, Anónimos, Ecuador, Guayaquil, 
    Ubicación, Redes Sociales, Email">
    <meta name="author" content="Instituto Superior Tecnológico Guayaquil">
    <meta name="copyright" content="Alcohólicos Anónimos Ecuador">
    <meta name="twitter:site" content="https://twitter.com/osg_aaEcuador">
    <meta name="twitter:title" content="OSG Alcohólicos Anónimos Ecuador Oficial">
    <meta property="fb:app_id" content="https://www.facebook.com/osg.alcoholicosanonimos" />
    <meta name="fb:title" content="Alcohólicos Anónimos Del Ecuador">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel = "canonical" href = "https://www.alcoholicosanonimos.org.ec"/>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
	
    <meta name="robots" content="index, follow">
    <title>Alcohólicos Anónimos Ecuador</title>
    <link href="{{ asset('img/aalogo2.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.extensions.min.js" integrity="sha512-0xW5KFMtT462F65vVvIejNawM1U2Fp/yhItmQVFUwdYP+R9tQFCn4QtLEhkp6RoGovZ6YCvbxy+GVCtGv0+nvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="/img/aalogo2.png" rel="icon">

    <!-- <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('css/boostrapfooter.css') }}"> -->
	<!-- <script src="https://kit.fontawesome.com/fff244fd4f.js" crossorigin="anonymous"></script> -->
</head>

<body class="">

    <!-- navbar -->
    @extends("nav/navbar_scroll")

    <div id="fullpage">

        <!-- Carrusel -->
        <section class="section">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade full-height pull-right mb-5" data-bs-ride="carousel">
                <div class="container mx-auto carousel-indicators">
                    <div class="row container spac m-0 p-0">
                        <div class="col flex-sm-0 flex-md-0 row m-0 p-0">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="btn-lg-h active"
                            aria-current="true" aria-label="Slide 1"></button>
                            <button class="btn-lg-h" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                            <button class="btn-lg-h" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        </div>

                        <div class="col col-xs-auto flex-sm-last flex-md-first d-flex justify-content-end p-0">
                            <h3><a class="h6 p-0 mb-0 ml-2 mr-2 text-white nav-link text-center" href="https://www.facebook.com/osg.alcoholicosanonimos" target="_blank">Facebook</a></h3>
                            <h3><a class="h6 p-0 mb-0 ml-2 mr-2 text-white nav-link" href="https://twitter.com/osg_aaEcuador" target="_blank">Twitter</a></h3>
                            <h3><a class="h6 p-0 mb-0 ml-2 text-white nav-link" href="https://www.instagram.com/alcoholicosanonimosecuador/" target="_blank">Instagram</a></h3>
                        </div>
                    </div>
                </div>

                <div class="carousel-inner">
                    <div class="position-relative w-100 carousel-item active">
                        <img class="img-full rt90 w-100 objfit" src="{{ asset('img/carrusel/imgt2.jpg') }}" alt="">
                        <div class="position-absolute text-white d-flex flex-column align-items-start justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.7);">
                            <div class="container p-0">
                                <div class="col-md-8">
                                    
                                    <h2 class="mb-4 mt-2 display-1 font-weight-bold">Alcohólicos Anónimos Ecuador</h2>
                                    <span class="text-left">Cualquiera que tenga el deseo de dejar de beber es bienvenido, sin importar su raza, 
                                        género, orientación sexual, religión, nivel de ingresos o profesión. 
                                        No tiene que pagar nada para asistir a nuestras reuniones. 
                                        Simplemente puede sentarse y escuchar y aprender más acerca de la recuperación, 
                                        o puede compartir sobre su situación. Todo depende de usted.</span>
                                    <div class="mt-5">
                                        <a href="#" class="btn px-5 py-2 text-white mt-3 mt-sm-0 btn-r-aa">Más información</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative w-100 carousel-item">
                        <img class="img-full rt90 w-100" src="/img/carrusel/imgt2.jpg" alt="">
                        <div class="position-absolute text-white d-flex flex-column align-items-start justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.7);">
                            <div class="container p-0">
                                <div class="col-md-8">
                                    
                                    <h2 class="mb-4 mt-2 display-1 font-weight-bold">Alcohólicos Anónimos Ecuador</h2>
                                    <span class="text-left">Cualquiera que tenga el deseo de dejar de beber es bienvenido, sin importar su raza, 
                                        género, orientación sexual, religión, nivel de ingresos o profesión. 
                                        No tiene que pagar nada para asistir a nuestras reuniones. 
                                        Simplemente puede sentarse y escuchar y aprender más acerca de la recuperación, 
                                        o puede compartir sobre su situación. Todo depende de usted.</span>
                                    <div class="mt-5">
                                    <a href="#" class="btn px-5 py-2 text-white mt-3 mt-sm-0 btn-r-aa">Más información</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative w-100 carousel-item">
                        <img class="img-full rt90 w-100" src="/img/carrusel/imgt2.jpg" alt="">
                        <div class="position-absolute text-white d-flex flex-column align-items-start justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.7);">
                            <div class="container p-0">
                            <div class="col-md-8">

                                <h2 class="mb-4 mt-2 display-1 font-weight-bold">Alcohólicos Anónimos Ecuador</h2>
                                <span class="text-left">Cualquiera que tenga el deseo de dejar de beber es bienvenido, sin importar su raza, 
                                    género, orientación sexual, religión, nivel de ingresos o profesión. 
                                    No tiene que pagar nada para asistir a nuestras reuniones. 
                                    Simplemente puede sentarse y escuchar y aprender más acerca de la recuperación, 
                                    o puede compartir sobre su situación. Todo depende de usted.</span>
                                <div class="mt-5">
                                <a href="#" class="btn px-5 py-2 text-white mt-3 mt-sm-0 btn-r-aa">Más información</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video -->
        <section class="section container">
            <div class="row justify-content-between align-items-center">
                <video class="col-sm col-md-5 p-0" autoplay loop muted controls src="\video\videoPrincipal.mp4" ></video>   
            
                <div class="col-sm col-md-5 p-0">
                    <h2 class="h2 text-right">Video Informativo</h2>
                    <p class=" text-right">Somos el cambio en el comportamiento de un individuo, que incluye,
                        además de una alteración que se manifiesta por el consumo franco de bebidas alcohólicas una continuidad 
                        de este consumo de manera no aprobada en su ambiente socio-cultural, a pesar de las dolorosas 
                        consecuencias directas que puede sufrir como enfermedades físicas,
                        rechazo por parte de la familia, perjuicios económicos, y sanciones penales...
                    </p>
                </div>
            </div>
        </section>

        <!-- Test de alcoholismo -->
        <section class="section container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm col-md-5 p-0">
                    <h2 class="h2 text-left">¿No está seguro de que tiene un problema?</h2>
                    <p class=" text-left">Solo usted puede decidir si quiere probar A.A., 
                        si usted cree que puede ayudarle. A continuación hay algunas preguntas que 
                        tratamos de responder sinceramente. Veamos cómo le va a usted. 
                        No debería darle vergüenza reconocer que tiene un problema.
                    </p>
                    <a class="btn text-white px-5 py-2 mt-3  btn-r-aa" href="{{ route('test_alcoholismo') }}">Hágase  una autoevaluación</a>
                </div>
                <img class="col-sm col-md-5 p-0 h-100" src="\img\bancodepreguntas.jpg" alt="" >
            </div>
        </section>

        <!-- Reflexiones diarias -->
        <section class="section container">
            <div class="row justify-content-between align-items-center">
                <img class="col-sm col-md-5 p-0 h-100" src="\img\calendar.png" alt="">
                <div class="col-sm col-md-5 p-0">
                    <h2 class="h2 text-right">Reflexiones Diarias</h2>
                    <p class="text-right">Lee nuestras reflexiones que se anuncian diariamente,
                        Aprenderas mucho en este apartado de sabiduría.
                    </p>
                    <a class="btn float-right text-white px-5 py-2 mt-3 btn-r-aa"  href="">Ir a reflexiones diarias</a>
                </div>
            </div>
        </section>

        <!-- Contactos -->
        <section class="section container">
            <div class="row justify-content-between align-items-center pt-5">
                <div class="row col-sm col-md-5 w45-aa mr-auto p-0 pr-5 mr-5 h-100">
                    <address class="col-sm "><i class="bi bi-geo-alt-fill"></i> Lorenzo de Garaicoa 821 y Av. 9 de Octubre, 2do Piso-Oficina 208 Guayaquil, ECUADOR</address>
                    <div class="w-100"></div>
                    <a class="col text-decoration-none text-dark" href="tel:+593984234170"><i class="bi bi-telephone-fill"></i> 0984234170 / (04)-2309023 </a>
                    <div class="w-100"></div>
                    <a class="col text-decoration-none text-dark" href="mailto:osg@alcoholicosanonimos.org.ec" target="_blank"><i class="bi bi-envelope-fill"></i> osg@alcoholicosanonimos.org.ec</a>
                    <div class="w-100"></div>
                    <iframe class="col" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4475.14880140021!2d-79.8869439588731!3d-2.1899880312272275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6f9a3bcfab3b820!2sAlcoh%C3%B3licos%20An%C3%B3nimos%20Ecuador!5e0!3m2!1ses!2sec!4v1649694597509!5m2!1ses!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm col-md-5 w45-aa p-0 pl-5 pr-0 ml-5">
                    <h2 class="h2 text-right">Formulario de contacto</h2>
                    <form action="" method="post">
                        <div class="mb-3"><input type="text" class="form-control" id="nombreForm" placeholder="Nombre"></div>
                        <div class="mb-3"><input type="email" class="form-control" placeholder="Correo"></div>
                        <div class="mb-3"><input type="text" class="form-control" placeholder="Titulo del mensaje"></div>
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                    </form>
                    
                    <a class="btn float-right mt-4 w-100 text-white btn-r-aa" style="background-color:#3977C3;" href="">Enviar</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <x-footer></x-footer>

    </div>

</body>
<!-- <script src="{{ asset('js/app.js') }}" defer></> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('js/fullpage.js') }}"></script>

</html>
