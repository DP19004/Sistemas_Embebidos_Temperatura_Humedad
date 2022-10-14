@extends('adminlte::page')
@section('title', 'Gestionar | Alarmas')
@section('content')

<!---aca mi codigo-->
<style>
    table{
      text-align: center;
      box-shadow: 0px 0px 15px #454545;
      -moz-box-shadow: 0px 0px 15px #454545;
      filter: progid:DXImageTransform.Microsoft.Shadow(color='#454545', Direction=135, Strength=4);    
    }
</style>

<br>
<h1 class="display-4 text-center">Gestionar Alarmas</h1>

<div class="p-5">
    <br>
    <span class="tt" data-bs-placement="bottom" title="Agrega una nueva alarma">
        <a href="alarmas/create" class="btn btn-primary">CREAR</a>
    </span>

    <br> <br>
    <div class="table-responsive">

        <table class="table table-striped table-dark ">
            <thead>
                <tr class="bg-title">
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
                        <a class="btn btn-info" ata-toggle="tooltip" data-placement="top" title="Edita la alarma"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>
                            </a>
                        <button class="btn btn-danger" ata-toggle="tooltip" data-placement="top" title="Elimina la alarma">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection