@extends('adminlte::page')

@section('title', 'Registrar Cultivo')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Registrar Nuevo Cultivo</h5>
        <div class="card-body">
            <!-- Formulario -->
            <form action="/cultivos"method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="temperaturaMax">Temperatura Maxima</label>
                    <input type="number" class="form-control" name="temperaturaMax" required step="0.1">
                </div>
                <div class="form-group">
                    <label for="temperaturaMin">Temperatura Minima</label>
                    <input type="number" class="form-control" name="temperaturaMin" required step="0.1">
                </div>
                <div class="form-group">
                    <label for="humedadMax">Humedad Maxima</label>
                    <input type="number" class="form-control" name="humedadMax" required min="0">
                </div>
                <div class="form-group">
                    <label for="humedadMin">Humedad Minima</label>
                    <input type="number" class="form-control" name="humedadMin" required min="0">
                </div>
                <!-- Botones -->
                <div class="text-center">
                    <a href="/cultivos" class="btn btn-secondary" tabindex="8">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Card -->

@endsection
