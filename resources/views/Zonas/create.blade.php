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
        <input id="nombre" name="Nombre" type="text" class="form-control" tabindex="1" value="{{old('Nombre')}}" >
        @error('Nombre')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Latitud</label>
        <input id="latitud" name="Latitud" type="number" step="any" value="{{old('Latitud')}}" class="form-control" tabindex="2" >
        @error('Latitud')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Longitud</label>
        <input id="longitud" name="Longitud" type="number" step="any" value="{{old('Longitud')}}" class="form-control" tabindex="3" >
        @error('Longitud')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Periodo de registro</label>
        <input id="periodoDeRegistro" name="PeriodoDeRegistro" type="number" step="any" value="{{old('PeriodoDeRegistro')}}" class="form-control" tabindex="4" >
        @error('PeriodoDeRegistro')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">kit de sensores</label><br>
        <select class="form-control" aria-label="Default select example" id="id_Kit" name='Id_Kit'value="{{old('Id_Kit')}}" tabindex="5" >
            <option selected></option>
            @foreach ($kits as $item)
            <option value="{{$item->id}}">{{$item->id}}</option>
            @endforeach
        </select>
        @error('Id_Kit')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Alarmas programables</label><br>
        <select class="form-control" aria-label="Default select example" id="id_Alarma" name='Id_Alarma' value="{{old('Id_Alarma')}}" tabindex="6" >
            <option selected></option>
            @foreach ($alarmas as $a)
            <option value="{{$a->id}}">{{$a->nombre}}</option>
            @endforeach
        </select>
        @error('Id_Alarma')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <!--botones-->
    <a href="/Zonas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection