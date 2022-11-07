@extends('adminlte::page')

@section('title', 'Kit de Sensores|Editar')
@section('content')

<div class="mx-auto" style="width:600px;">
<br>
<h2 class="display-5">Editar Kit Sensor</h2>
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
    <a href="/kitSensores" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection