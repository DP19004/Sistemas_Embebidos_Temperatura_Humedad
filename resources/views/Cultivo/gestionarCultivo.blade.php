@extends('adminlte::page')

@section('title','Cultivo')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestionar Cultivo</title>
  </head>

    <style>
           body
           {
            margin: 0px;
           }

           table
           {
            text-align: center;
           }
    </style>

  <body>
    <h1 
       style="color: black;
       font-family: georgia;
       text-align:center;
       background-color: #6095F0"
       >Gestionar Cultivo</h1>
    
    <a class="btn btn-primary">Nuevo</a>

    <section class="intro">
  
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
                        <th scope="col">Temperatura Máxima</th>
                        <th scope="col">Temperatura Mínima</th>
                        <th scope="col">Humedad Máxima</th>
                        <th scope="col">Humeda Mínima</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr class="border-top">
                        <td>Tomate</td>
                        <td>25</td>
                        <td>20</td>
                        <td>80%</td>
                        <td>60%</td>
                        <td>
                          <button class="btn btn-info">Editar</button>
                          <button class="btn btn-success">Ver</button>
                          <button class="btn btn-danger">Eliminar</button>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td>Papa</td>
                        <td>23</td>
                        <td>17</td>
                        <td>95%</td>
                        <td>90%</td>
                        <td>
                          <button class="btn btn-info">Editar</button>
                          <button class="btn btn-success">Ver</button>
                          <button class="btn btn-danger">Eliminar</button>
                        </td>
                      </tr>
                      <tr class="border-top">
                        <td>Maiz</td>
                        <td>34</td>
                        <td>30</td>
                        <td>25%</td>
                        <td>20%</td>
                        <td>
                          <button class="btn btn-info">Editar</button>
                          <button class="btn btn-success">Ver</button>
                          <button class="btn btn-danger">Eliminar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
@endsection