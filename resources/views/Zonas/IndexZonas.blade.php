@extends('adminlte::page')
@section('title', 'Zonas')
@section('content')

    <a href="zona/create" btn ="success"></a>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestionar Zonas</title>
  </head>

    <style>
      table { text-align: center; }
    </style>
    
    <h1 style="color: black; font-family: georgia; text-align:center; background-color: #6095F0">Gestionar Zonas</h1>
    <a href="Zonas/create" class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 20 20">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg>
      Nuevo
    </a>
    
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #ffffff; margin-top: 20px;">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark table-striped mt-4">
                     
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Latitud</th>
                          <th scope="col">Longitud</th>
                          <th scope="col">Periodo de registro</th>
                          <th scope="col">Kit de Sensores</th>
                          <th scope="col">Alarmas</th>
                          <th scope="col">cultivos</th>
                          <th scope="col">Acciones</th>
                        </tr>
                     
                      <tbody>
                          @foreach ($zonas as $zona)
                          <tr>
                              <td>{{$zona->nombre}}</td>
                              <td>{{$zona->latitud}}</td>
                              <td>{{$zona->longitud}}</td>
                              <td>{{$zona->periodoDeRegistro}}</td>
                              <td>{{$zona->id_Kit}}</td>
                              <td>{{$zona->id_Alarma}}</td>
                              <td>pendiente</td>
                              <td>
                                <button class="btn btn-info">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                  </svg>
                                </button>
                                <button class="btn btn-danger">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                  
                                </button>
                              </td>
                          </tr>
                          @endforeach
                        
                      </tbody>
                  </table>    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection