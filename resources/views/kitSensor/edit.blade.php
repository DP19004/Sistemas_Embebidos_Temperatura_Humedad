@extends('adminlte::page')
@section('title', 'Editar | Kit de Sensores')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Editar Sensor</h5>
            <div class="card-body">
                <!-- Formulario -->
                <form action="/kitSensores/{{$kitSensor->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Serial de Humedad</label>
                        <input id="serialHumedad" name="serialHumedad" type="text"  class="form-control" value="{{$kitSensor->serialHumedad}}" pattern="[0-9]+">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Serial de Temperatura</label>
                        <input id="serialTemperatura" name="serialTemperatura" type="text"  class="form-control" value="{{$kitSensor->serialTemperatura}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de Colocacion</label>
                        <input id="fechaColocacion" name="fechaColocacion" type="date"  class="form-control" value="{{$kitSensor->fechaColocacion}}">
                    </div>
                    <!--botones-->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <a href="/kitSensores" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
    </div>
</div>
<!-- /Card -->

@endsection
