@extends('layouts.plantillabase');

@section('contenido')
<a href="alarmas/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Temperatura Maxima</th>
            <th scope="col">Temperatura Maxima</th>
            <th scope="col">Humedad Maxima</th>
            <th scope="col">Humedad Minima</th>
            <th scope="col">Importancia</th>
            <th scope="col">Status</th>
            <th scope="col">Recomendacion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alarmas as $alarma)
        <tr>
            <td>{{$alarma-nombre}}</td>
            <td>{{$alarma-temperaturaMax}}</td>
            <td>{{$alarma-temperaturaMin}}</td>
            <td>{{$alarma-humedadMax}}</td>
            <td>{{$alarma-humedadMin}}</td>
            <td>{{$alarma-importancia}}</td>
            <td>{{$alarma-status}}</td>
            <td>{{$alarma-recomendacion}}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger"></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection