@extends('adminlte::page')

@section('title', 'Usuarios | Editar')
@section('content')

<div class="mx-auto" style="width:600px;">
<br>
<h2 class="display-5">Editar Usuario</h2>
<form action="/User/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text"  class="form-control" value="{{$user->name}}" pattern="[0-9]+">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input id="email" name="email" type="text"  class="form-control" value="{{$user->email}}">
    </div>

    <!--botones-->
    <a href="/usuarios" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
</div>
@endsection
