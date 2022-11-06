@extends('adminlte::page')

@section('title', 'Kit de Sensores|Registrar')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Agregar Kit de Sensores</h5>
        <div class="card-body">
            <!-- Formulario -->
            <form action="/kitSensores" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Serial de Humedad</label>
                    <input id="serialHumedad" name="serialHumedad" type="text" class="form-control" tabindex="1" required="" pattern="[0-9]+" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Serial de Temperatura</label>
                    <input id="serialTemperatura" name="serialTemperatura" type="text"   class="form-control" tabindex="2" required="" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha de Colocacion</label>
                    <input id="fechaColocacion" name="fechaColocacion" type="date"  class="form-control" tabindex="3" required >
                </div>
                <!-- Botones -->
                <div class="text-center">
                    <a href="/kitSensores" class="btn btn-secondary" tabindex="8">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Card -->

@endsection
