@extends('formulario')

@section('content')

<h1 class="do">Las preguntas que usted puede contestar</h1>


<p class="text-justify">
Solo usted puede decidir si quiere probar A.A., si usted cree que puede ayudarle.<br>
A continuación hay algunas preguntas que tratamos de responder sinceramente.<br> 
Veamos cómo le va a usted. No debería darle vergüenza reconocer que tiene un problema. 
</p>



<form class="container">

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Ha tratado alguna vez de dejar de beber durante una semana o más, sin haber podido cumplir el plazo?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
          <div class="d-grid gap-5 d-md-flex justify-content-md-end">
              <button class="vt btn btn-primary" type="button">Si</button>
              <button class="rv btn btn-primary" type="button">No</button>
          </div>
      </div>
    </div>
  </div>

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Le fastidian los consejos de otras personas en cuanto a su forma de beber le gustaría que dejasen de entrometerse en sus asuntos?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
              <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                  <button class="vt btn btn-primary" type="button">Si</button>
                  <button class="rv btn btn-primary" type="button">No</button>
              </div>
      </div>
    </div>
  </div>

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Ha cambiado de una clase de bebida a otra con objeto de evitar emborracharse?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
          <div class="d-grid gap-5 d-md-flex justify-content-md-end">
              <button class="vt btn btn-primary" type="button">Si</button>
              <button class="rv btn btn-primary" type="button">No</button>
          </div>
      </div>
    </div>
  </div>

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Se ha tenido que tomar algún trago al levantarse por la mañana durante el año pasado?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
          <div class="d-grid gap-5 d-md-flex justify-content-md-end">
              <button class="vt btn btn-primary" type="button">Si</button>
              <button class="rv btn btn-primary" type="button">No</button>
          </div>
      </div>
    </div>
  </div>

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Tiene envidia de las personas que pueden beber sin meterse en líos?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
          <div class="d-grid gap-5 d-md-flex justify-content-md-end">
              <button class="vt btn btn-primary" type="button">Si</button>
              <button class="rv btn btn-primary" type="button">No</button>
          </div>
      </div>
    </div>
  </div>

  <div class="one row g-2 container w-75 p-4 mt-5">
    <div class="col-md">
      <div class="form-floating">
        <p>¿Ha tenido algún problema relacionado con la bebida durante el año pasado?</p>
      </div>
    </div>
    <div class="col-md">
      <div class="form-floating">
          <div class="d-grid gap-5 d-md-flex justify-content-md-end">
              <button class="vt btn btn-primary" type="button">Si</button>
              <button class="rv btn btn-primary" type="button">No</button>
          </div>
      </div>
    </div>
  </div>

</form>

  <div class="btn d-grid gap-2 col-3 mx-auto mt-5">
    <button class="btn btn-primary" type="button">Ver Resultados</button>
  </div>




@endsection