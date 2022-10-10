@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')



<h2>Agregar alarma</h2>

<!--tabla para registrar-->
<div>
<form action="/alarmas" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temperatura Maxima</label>
        <input id="temperaturaMax" name="temperaturaMax" type="number" step="any" value="0.00" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temperatura Minima</label>
        <input id="temperaturaMin" name="temperaturaMin" type="number" step="any" value="0.00" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Humedad Maxima</label>
        <input id="humedadMax" name="humedadMax" type="number" step="any" value="0.00" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Humedad Minima</label>
        <input id="humedadMin" name="humedadMin" type="number" step="any" value="0.00" class="form-control" tabindex="6">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Importancia</label><br>
        <select class="form-select" aria-label="Default select example" id="importancia" name='importancia' tabindex="7">
            <option selected></option>
            <option value="Baja">Baja</option>
            <option value="Media">Media</option>
            <option value="Alta">Alta</option>
        </select>
    </div>

    <label for="" class="form-label">Status</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="status" value="1" default="1" tabindex="8" disabled>
        <label class="form-check-label" for="inlineCheckbox1">Encendido</label>
    </div>
    <br><br>
    <div class="mb-3">
        <label for="" class="form-label">Recomendacion</label>
        <input id="recomendacion" name="recomendacion" type="text" class="form-control" tabindex="9">
    </div>
    <!--botones-->
    <a href="/alarmas" class="btn btn-secondary" tabindex="10">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="11">Guardar</button>
</form>
</div>
@endsection
