@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')

<div class="mx-auto" style="width:600px;">
<br>
<h2 class="display-5">Agregar Kit de Sensores</h2>
<form action="/kitSensores" method="POST">
    @csrf    
    
    <div class="mb-3">
        <label for="" class="form-label">Humedad</label>
        <input id="serialHumedad" name="serialHumedad" type="number" step="any" value="0.00" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temperatura</label>
        <input id="serialTemperatura" name="serialTemperatura" type="number" step="any" value="0.00" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Colocacion</label>
        <input id="fechaColocacion" name="fechaColocacion" type="date"  class="form-control" tabindex="3" required>
    </div>
    
    <!--botones-->
    <a href="/kitSensores" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection