<!DOCTYPE html>
<html lang="es">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>¿Es A.A. para usted?   | Alcoholics Anonymous</title>
    <link rel="stylesheet" href="{{ asset('css/ResultadoTest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boostrapfooter.css') }}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  </head>
  <body>
  
    <main role="main" class="main-section" id="main-content">
      <section class="layout-main-section">
        <div class="region region-top-content">
          <div data-drupal-messages-fallback class="hidden"></div>
          <section id="block-genericbanner" class="block block-aa-base block-aa-generic-banner">
            <div class="wrapper">
              <h1>¿Es A.A. necesario para usted?</h1>
            </div>
          </section>
        </div>

        <div class="region region-content">
          <div id="block-aa-content" class="block block-system block-system-main-block">
            <article role="article" class="node node--type-questionnaire node--view-mode-full">
              <div class="node__content">
                <ul class="results">
                  <div class="box1">
                    <li class="y"><label>Preguntas contestadas con Sí = </label><span class="ammt">0</span></li>
                    <li class="n"><label>Preguntas contestadas con No = </label><span class="ammt">0</span></li>
                  </div>
                </ul>
                <br> 
                  <div class="clearfix" >
                    <p>
                    <strong>¿Contestó que SÍ cuatro o más veces?</strong>
                   </p>
                  <div class="middle-letter">
                    <p>
                      Si es así, probablemente tenga problemas con el alcohol. ¿Por qué decimos esto? Porque miles de personas en A.A. 
                      han dicho exactamente eso durante muchos años. Descubrieron la verdad sobre sí mismos, de la forma más dura.  
                    <br />
                     <br />
                      Pero en realidad solamente usted puede decidir si cree que A.A. es para usted. Trate de mantener la mente abierta. 
                      Si su respuesta es SÍ, con gusto le enseñaremos cómo hicimos para dejar de beber. Simplemente llámenos.  
                    <br />
                     <br />  
                    </p>
                  </div>

                  <p><strong>Dé el siguiente paso. </strong></p>
                  <div class="middle-letter">
                    <p>
                      Puede llamar a una oficina local de A.A. para hacer más preguntas o para conversar con un miembro de A.A. 
                      También puede asistir a una reunión en persona o en línea.  
                    </p>
                  
                    <p><button class="redondo" href="">Encuentre A.A. cerca de usted  &gt;
                    </button> </p>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>       
      </section>
    </main>
    <footer class="footer-section">
      <x-app-layout>
          @extends('footer.footer')
      </x-app-layout>
    </footer>
  </body>
</html>
