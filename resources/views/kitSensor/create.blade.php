@extends('adminlte::page')

@section('title', 'Kit de Sensores|Registrar')
@section('content')

<div class="mx-auto" style="width:600px;">
<br>
<h2 class="display-5">Agregar Kit de Sensores</h2>
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
    
    <!--botones-->
    <a href="/kitSensores" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection