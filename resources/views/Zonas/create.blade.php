@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')

<div class="mx-auto" style="width:600px;">
<br>
<h2 class="display-5">Agregar Zona</h2>
<form action="/Zonas" method="POST">
    @csrf    
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Latitud</label>
        <input id="latitud" name="latitud" type="number" step="any" value="0.00" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Longitud</label>
        <input id="longitud" name="longitud" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Periodo de registro</label>
        <input id="periodoDeRegistro" name="periodoDeRegistro" type="number" step="any" value="0.00" class="form-control" tabindex="4" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">kit de sensores</label><br>
        <select class="form-control" aria-label="Default select example" id="id_Kit" name='kits de sensores' tabindex="5" required>
            <option selected></option>
            @foreach ($kits as $item)
            <option value= {{$item->id}}>{{$item->id}}</option>
            @endforeach
        </select>
    </div>
    <!--botones-->
    <a href="/Zonas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection