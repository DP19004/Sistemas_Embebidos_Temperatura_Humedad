@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

@extends('layouts.plantillabase');

@section('contenido')
<div class="mx-auto" style="width:1300px;">
    <br>
    <h1 class="display-4 text-center">KitSensores</h1>
    <br>
    <a href="kitSensores/create" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Humedad</th>
                <th scope="col">Temperatura</th>
                <th scope="col">Fecha de Colocacion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kitSensores as $kitSensor)
        <tr>                
                <td>{{$kitSensor->serialHumedad}}</td>
                <td>{{$kitSensor->serialTemperatura}}</td>
                <td>{{$kitSensor->fechaColocacion}}</td>
                <td>
                    <a class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection