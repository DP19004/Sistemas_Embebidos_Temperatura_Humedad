@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

    <a href="Zonas/create" btn ="success"></a>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestionar Cultivo</title>
  </head>

    <style>
      table { text-align: center; }
    </style>

    <h1 style="color: black; font-family: georgia; text-align:center; background-color: #6095F0">Gestionar Zonas</h1>
    <a class="btn btn-primary">Nuevo</a>
    
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #f5f7fa; margin-top: 20px;">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless mb-0">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Latitud</th>
                          <th scope="col">Longitud</th>
                          <th scope="col">Periodo de registro</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($zonas as $zona)
                          <tr>
                              <td>{{$zona->Nombre}}</td>
                              <td>{{$zona->Latitud}}</td>
                              <td>{{$zona->Longitud}}</td>
                              <td>{{$zona->Periodo}}</td>
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