@extends('adminlte::page')

@section('title', 'Editar | Cultivo')
@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cultivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <h4 class="heading" style="text-align: center;">Editar cultivo</h4>
        <br>
        <div class ="d-flex align-items-center justify-content-center">
            <div class="col-md-4 border">
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
                        <input type="number" class="form-control" name="humedadMax" required min="0" max="1" step="0.01" value="{{$cultivo->HumedadMaxima}}">
                    </div>
                    <div class="form-group">
                        <label for="humedadMin">Humedad Minima</label>
                        <input type="number" class="form-control" name="humedadMin" required min="0" max="1" step="0.01" value="{{$cultivo->HumedadMinima}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="/cultivos" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection