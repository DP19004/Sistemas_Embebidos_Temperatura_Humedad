@extends('adminlte::page')

@section('title', 'Editar | Cultivos')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Editar Cultivo</h5>
            <div class="card-body">
                <!-- Formulario -->
                <form action="/cultivos/{{$cultivo->id}}"method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required value="{{$cultivo->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="temperaturaMax">Temperatura Maxima</label>
                        <input type="number" class="form-control" name="temperaturaMax" required step="0.1" value="{{$cultivo->TemperaturaMaxima}}">
                    </div>
                    <div class="form-group">
                        <label for="temperaturaMin">Temperatura Minima</label>
                        <input type="number" class="form-control" name="temperaturaMin" required step="0.1" value="{{$cultivo->TemperaturaMinima}}">
                    </div>
                    <div class="form-group">
                        <label for="humedadMax">Humedad Maxima</label>
                        <input type="number" class="form-control" name="humedadMax" required min="0"  step="0.01" value="{{$cultivo->HumedadMaxima}}">
                    </div>
                    <div class="form-group">
                        <label for="humedadMin">Humedad Minima</label>
                        <input type="number" class="form-control" name="humedadMin" required min="0"  step="0.01" value="{{$cultivo->HumedadMinima}}">
                    </div>
                    <!-- Botones -->
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Editar">
                        <a href="/cultivos" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
                <!-- /Formulario -->
            </div>
    </div>
</div>
<!-- /Card -->

@endsection
