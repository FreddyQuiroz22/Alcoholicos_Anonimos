@extends('preguntas')

@section('content')

    <h1>Preguntas Frecuentes</h1>

    <div class="accordion container w-50 p-5 mt-5">
        <div class="top accordion-item">
            <h2 class="to accordion-header" id="headingOne">
                <button class="to accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Qué es Alcohólicos Anónimos?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="to accordion-body">
                    Alcohólicos Anónimos es una comunidad de hombres y mujeres que comparten su mutua experiencia, fortaleza y esperanza para resolver su problema común y ayudar a otros a recuperarse del alcoholismo. 
                    El único requisito para ser miembro de A.A., es el deseo de dejar la bebida. Para ser miembro de A.A. no se pagan honorarios ni cuotas; nos mantenemos con nuestras propias contribuciones. 
                    A.A. no está afiliada a ninguna secta, religión, partido político, organización o institución alguna; no desea intervenir en controversias; no respalda ni se opone a ninguna causa. 
                    Nuestro objetivo primordial es mantenernos sobrios y ayudar a otros alcohólicos a alcanzar el estado de sobriedad.                </div>
            </div>
        </div>
        <div class="top accordion-item">
            <h2 class="toaccordion-header" id="headingTwo">
                <button class="to accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cómo hace una persona para unirse a A.A.?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="to accordion-body">
                    Nadie “se une” a A.A. en el sentido usual de la expresión. No es necesario llenar una solicitud. (En realidad, muchos de los grupos ni siquiera tienen lista de miembros). 
                    No hay que pagar cuota de matrícula ni contribuciones de ninguna clase. La mayoría de las personas se asocian a A.A. con sólo asistir a las reuniones de un grupo local.
                    Su introducción puede ocurrir de varias maneras. Puede que, habiendo llegado al punto en que sinceramente querían dejar la bebida, se hayan puesto en contacto voluntariamente con A.A. llamando a la oficina local de A.A                </div>
            </div>
        </div>
        <div class="top accordion-item">
            <h2 class="to accordion-header" id="headingThree">
                <button class="to accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Se tiene que pagar una comision por ser miembro?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="to accordion-body">
                    En Alcohólicos Anónimos no se pagan honorarios ni cuotas; nos mantenemos con nuestras propias contribuciones. A.A., no está afiliada a ninguna secta, religión, partido politíco, organización o institución alguna.
                </div>
            </div>
        </div>
        <div class="top accordion-item">
            <h2 class="to accordion-header" id="headingFour">
                <button class="to accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Existen reglamentos en A.A.?                
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="to accordion-body">
                    La ausencia de reglamentos y disposiciones de carácter obligatorio es una de las cualidades más singulares de A.A. como grupo local y como asociación de alcance mundial. 
                    No hay estatutos que digan que un miembro tiene que asistir a determinado número de reuniones durante cierto período de tiempo.
                    Como es de suponer, la mayoría de los grupos tienen la tradición, no escrita, de que cualquiera que siga bebiendo y que por su comportamiento interrumpa una reunión de A.A. tendrá que ausentarse de ella; la misma persona, sin embargo, será bienvenida en cualquier momento en que sus acciones no causen molestias.                
                </div>
            </div>
        </div>
        <div class="top accordion-item">
            <h2 class="to accordion-header" id="headingFive">
                <button class="to accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Si me hago miembro de A.A., no lo sabrá enseguida todo el mundo?                
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="to accordion-body">
                El anonimato es y ha sido siempre la base del programa de A.A. Después de ser miembros por algún tiempo, la mayoría de los A.A. no tienen inconveniente en que se sepa que se han unido a una sociedad que les ayuda a permanecer sobrios.
                Tradicionalmente los A.A. nunca revelan su asociación con el movimiento a través de la radio, la prensa o cualquier otro medio de publicidad.
                Los miembros antiguos del grupo comprenden lo que sienten los recién llegados y recuerdan sus propias dudas y el temor que sentían de ser identificados públicamente con la aterradora palabra de “alcohólico”.
                </div>
            </div>
        </div>
    </div><br>

@endsection