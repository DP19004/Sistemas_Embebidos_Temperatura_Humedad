@extends('adminlte::page')

@section('title', 'Editar | Zonas')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Editar Zona</h5>
            <div class="card-body">
                <!-- Formulario -->
                <form action="/Zonas/{{$zona->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" name="Nombre" type="text" class="form-control" tabindex="1" require value="{{$zona->nombre}}" >
                    </div>
                    <div class="mb-3">
                        <label for="latitud" class="form-label">Latitud</label>
                        <input id="latitud" name="Latitud" type="number" step="any" value="{{$zona->latitud}}" class="form-control" tabindex="2" >
                    </div>
                    <div class="mb-3">
                        <label for="longitud" class="form-label">Longitud</label>
                        <input id="longitud" name="Longitud" type="number" step="any" value="{{$zona->longitud}}" class="form-control" tabindex="3" >
                    </div>
                    <div class="mb-3">
                        <label for="periodoDeRegistro" class="form-label">Periodo de registro(hrs)</label>
                        <input id="periodoDeRegistro" name="PeriodoDeRegistro" type="number" step="any" value="{{$zona->periodoDeRegistro}}" class="form-control" tabindex="4" >
                    </div>
                    <div class="mb-3">
                        <label for="id_kit" class="form-label">Kit de Sensores</label><br>
                        <select class="form-control" id="id_Kit" name='Id_Kit' require value="{{$zona->id_Kit}}" tabindex="5" >
                            <option selected>{{$zona->id_Kit}}</option>
                            @foreach ($kits as $k)
                            <option value="{{$k->id}}">{{$k->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_Alarma" class="form-label">Alarmas programables</label><br>
                        <select class="form-control" id="id_Alarma" name='Id_Alarma' require value="{{$zona->id_Alarma}}" tabindex="6" >
                            @foreach ($alarmas as $a)
                            @if($a->id == $zona->id_Alarma)
                            <option selected value="{{$a->id}}">{{$a->nombre}} (Actual)</option>
                            @endif
                            <option value="{{$a->id}}">{{$a->nombre}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_Cultivo" class="form-label">Cultivos Disponibles</label><br>
                        <select class="form-control" id="id_Cultivo" name='Id_Cultivo' require value="{{$zona->id_Cultivo}}" tabindex="7" >
                            @foreach ($cultivos as $c)
                            @if($c->id == $zona->id_Cultivo)
                            <option selected value="{{$c->id}}">{{$c->nombre}} (Actual)</option>
                            @endif
                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--botones-->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" tabindex="8">Editar</button>
                        <a href="/Zonas" class="btn btn-secondary" tabindex="9">Cancelar</a>
                    </div>
                </form>
                <!-- /Formulario -->
            </div>
    </div>
</div>
<!-- /Card -->

@endsection