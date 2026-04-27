
@extends('layouts.app')

@section('contenido')
<div class="container text-center mt-4">
  <div class="row">
    <div class="col-12">
      <!-- Column -->
      <h1>Programa de Enseñanza</h1>
    </div>
    @foreach ($programa_ensenanza as $cinturon)
      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mt-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset($cinturon['path_imagen']) }}" class="card-img-top" alt="{{ $cinturon['nombre_cinturon'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $cinturon['nombre_cinturon'] }}</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p> -->
            <button type="button" class="btn btn-primary btn-detalle" data-id="{{ $cinturon['id_cinturon'] }}" data-bs-toggle="modal" data-bs-target="#modalDetalle">Ver detalles</button>
          </div>
        </div>
      </div>
    @endforeach

  </div>
</div>


<!-- MODAL HTML -->
<!-- Scrollable modal -->
<div class="modal fade" id="modalDetalle" tabindex="-1" aria-labelledby="modalDetalleLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDetalleLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Primera parte de detalle cinturon -->
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-2">
            <div class="col-12">
              Programa técnico
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center">
            <div class="col-12 grado-cinturon">
              Cargando...
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center">
            <div class="col-12 tiempo-permanencia">
              Tiempo de permanencia: 3 meses
            </div>
          </div>
        </div>
        <!-- Segunda parte temario tecnico -->
        <hr>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-4">
            <h6 class="col-12">
              TEMARIO TECNICO
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              CONTENIDO TECNICO EXIGIDO
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 temario-tecnico">
              DETALLE TEMARIO TECNICO
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              CRITERIOS DE EVALUACION
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 criterios-evaluacion">
              DETALLE CRITERIOS DE EVALUACION
            </div>
          </div>
        </div>
        <!-- Tercera parte temario tecnico -->
        <hr>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-4">
            <h6 class="col-12">
              FUNDAMENTOS TEÓRICOS EXIGIDOS
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              CONTENIDOS
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 contenidos">
              DETALLE CONTENIDOS
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              EVALUACION
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 evaluacion">
              DETALLE EVALUACION
            </div>
          </div>
        </div>
        <!-- Cuarta parte temario fisico -->
        <hr>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-4">
            <h6 class="col-12">
              REQUERIMIENTOS FÍSICOS MÍNIMOS
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              CONTENIDOS (CAPACIDADES)
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 contenidos-fisicos">
              DETALLE CONTENIDOS (CAPACIDADES)
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-1">
            <div class="col-12 text-decoration-underline">
              EVALUACION
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-left mt-2 ml-6">
            <div class="col-12 evaluacion-fisicos">
              DETALLE EVALUACION FISICA
            </div>
          </div>
        </div>
        <!-- Quinta parte comentario final -->
        <hr>
        <div class="row">
          <div class="col-12 d-flex justify-content-center text-center mt-4">
            <div class="col-12">
              "Las evaluaciones de <strong>aprendizajes técnicos, aprendizajes teóricos y aptitudes físicas</strong> se realizarán en jornadas distintas."
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Volver</button>
        <!-- <button type="button" class="btn btn-primary">Volver</button> -->
      </div>
    </div>
  </div>
</div>
@endsection
