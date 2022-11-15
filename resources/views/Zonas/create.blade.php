@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Agregar Zona</h5>
        <div class="card-body">
            <!-- Formulario -->
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
                    <label for="" class="form-label">Periodo de registro(hrs)</label>
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
                    @if ($mensaje == 'Para añadir una nueva zona primero debe registrar un nuevo kit de sensores')
                        <br>
                        <small style="color:rgb(202, 122, 2)">{{$mensaje}}</small>
                    @endif

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
                <!-- Botones -->
                <div class="text-center">
                    <a href="/Zonas" class="btn btn-secondary" tabindex="8">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Card -->

@endsection
