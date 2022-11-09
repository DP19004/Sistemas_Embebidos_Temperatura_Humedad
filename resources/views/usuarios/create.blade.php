@extends('adminlte::page')

@section('title', 'Usuarios | Registrar')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Agregar Usuario</h5>
        <div class="card-body">
            <!-- Formulario -->
            <form action="/usuarios" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input id="name" name="name" type="text" class="form-control" tabindex="1" required="" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input id="email" name="email" type="text"   class="form-control" tabindex="2" required="" >
                </div>
                <p>
                    <b style="color: rgb(57, 136, 253)">Se generará una contraseña aleatoria y se enviará al correo electrónico registado</b>
                </p>
                <!-- Botones -->
                <div class="text-center">
                    <a href="/usuarios" class="btn btn-secondary" tabindex="8">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Card -->

@endsection
