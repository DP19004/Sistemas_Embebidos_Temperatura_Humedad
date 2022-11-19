@extends('adminlte::page')

@section('title', 'Editar | Cultivo')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Editar Alarma</h5>
            <div class="card-body">
                <!-- Formulario -->
                <form action="/alarmas/{{$alarma->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required value="{{$alarma->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="temperaturaMax" class="form-label">Temperatura Máxima</label>
                    <input id="temperaturaMax" name="temperaturaMax" type="number" class="form-control" tabindex="2" value="{{$alarma->temperaturaMax}}">
                </div>
                <div class="mb-3">
                    <label for="temperaturaMin" class="form-label">Temperatura Mínima</label>
                    <input id="temperaturaMin" name="temperaturaMin" type="number" class="form-control" tabindex="3" value="{{$alarma->temperaturaMin}}">
                </div>
                <div class="mb-3">
                    <label for="humedadMax" class="form-label">Humedad Máxima</label>
                    <input id="humedadMax" name="humedadMax" type="number" class="form-control" tabindex="4" value="{{$alarma->humedadMax}}">
                </div>
                <div class="mb-3">
                    <label for="humedadMin" class="form-label">Humedad Mínima</label>
                    <input id="humedadMin" name="humedadMin" type="number" class="form-control" tabindex="5" value="{{$alarma->humedadMin}}">
                </div>
                <div class="mb-3">
                    <label for="importancia" class="form-label">Importancia</label><br>
                    <select class="form-control" id="importancia" name='importancia' tabindex="6" value="{{$alarma->importancia}}">
                        <option selected>{{$alarma->importancia}}</option>
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Zona asignada</label><br>
                    <select class="form-control"  aria-label="Default select example" id="zona" name='zona' tabindex="6" required>
                        @foreach ($Zonas as $zona)
                        <option  value={{$zona->id}} selected>{{App\Models\Zona::find($alarma->id_Zona)->nombre}}</option>
                        <option value={{$zona->id}}>{{$zona->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="recomendacion" class="form-label">Recomendación</label>
                    <input id="recomendacion" name="recomendacion" type="text" class="form-control" tabindex="7" value="{{$alarma->recomendacion}}">
                </div>
                <!-- Botones -->
                <div class="text-center">
                <button type="submit" class="btn btn-primary" tabindex="8">Editar</button>
                    <a href="/alarmas" class="btn btn-secondary" tabindex="9">Cancelar</a>
                </div>
                </form>
                <!-- /Formulario -->
            </div>
    </div>
</div>
<!-- /Card -->

@endsection
