@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

<!---aca mi codigo-->
<div class="mx-auto" style="width:1300px;">
    <br>
    <h1 class="display-4 text-center">Alarma</h1>
    <br>
    <a href="alarmas/create" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">TempMáx</th>
                <th scope="col">TempMín</th>
                <th scope="col">HumMáx</th>
                <th scope="col">HumMín</th>
                <th scope="col">Importancia</th>
                <th scope="col">Recom</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alarmas as $alarma)
            <tr>                
                <td>{{$alarma->nombre}}</td>
                <td>{{$alarma->temperaturaMax}}</td>
                <td>{{$alarma->temperaturaMin}}</td>
                <td>{{$alarma->humedadMax}}</td>
                <td>{{$alarma->humedadMin}}</td>
                <td>{{$alarma->importancia}}</td>                
                <td>{{$alarma->recomendacion}}</td>
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