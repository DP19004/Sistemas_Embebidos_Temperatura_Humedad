@extends('adminlte::page')
@section('title', 'Gestionar | Usuarios')
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
<h1 class="display-4 text-center">Gestionar Usuarios</h1>

<div class="p-5">
  <br>
  <span class="tt" data-bs-placement="bottom" title="Agrega un nuevo usuario">
    <a href="usuarios/create" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Clic para agregar un nuevo usuario">CREAR</a>
  </span>

  <br> <br>
  <div class="table-responsive">
    <table class="table table-striped table-dark ">
      <thead>
        <tr class="bg-title">
          <th scope="col">Nombre</th>
          <th scope="col">Correo Electrónico</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            <form action="{{route('usuarios.destroy',$user->id)}}" method="POST">
              @csrf
              @if ($user->fullacces=='no')
                @method('DELETE')
                <button type="submit" class="btn btn-danger" ata-toggle="tooltip" data-placement="top" title="Clic para eliminar el usuario">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg>
                </button>
              @endif

            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
