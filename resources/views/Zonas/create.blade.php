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
        <label for="" class="form-label">Kit de Sensores</label><br>
        <select class="form-control" aria-label="Default select example" id="id_Kit" name='Id_Kit' value="{{old('Id_Kit')}}" tabindex="5" >
            <option selected></option>
            @foreach ($kits as $k)
            <option value="{{$k->id}}">{{$k->id}}</option>
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
    <div class="mb-3">
        <label for="" class="form-label">Cultivos Disponibles</label><br>
        <select class="form-control" aria-label="Default select example" id="id_Cultivo" name='Id_Cultivo' value="{{old('Id_Cultivo')}}" tabindex="7" >
            <option selected></option>
            @foreach ($cultivos as $c)
            <option value="{{$c->id}}">{{$c->nombre}}</option>
            @endforeach
        </select> 
        @error('Id_Cultivo')
            <br>
            <small style="color:crimson">{{$message}}</small>
        @enderror
    </div>
    <!--botones-->
    <a href="/Zonas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 20 20">
            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
          </svg>
        Guardar
    </button>
</form>
</div>
@endsection