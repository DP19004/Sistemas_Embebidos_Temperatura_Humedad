@extends('adminlte::page')

@section('title', 'Registrar | Alarmas')
@section('content')

<!-- Card -->
<div class="d-flex">
    <div class="card mx-auto" style="width: 60%; margin-top: 2%;">
        <h5 class="card-header text-center text-white bg-dark" >Agregar Alarma</h5>
        <div class="card-body">
            <!-- Formulario -->
            <form action="/alarmas" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label" >Nombre</label>
                    <input id="nombre" name="nombre" id="validationCustom01" type="text" class="form-control" tabindex="1" required data-toggle="tooltip" data-placement="top" title="Clic para agregar una nueva alarma">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Temperatura Máxima</label>
                    <input id="temperaturaMax" name="temperaturaMax" type="number" step="any" value="0.00" class="form-control" tabindex="2" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Temperatura Mínima</label>
                    <input id="temperaturaMin" name="temperaturaMin" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Humedad Máxima</label>
                    <input id="humedadMax" name="humedadMax" type="number" step="any" value="0.00" class="form-control" tabindex="4" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Humedad Mínima</label>
                    <input id="humedadMin" name="humedadMin" type="number" step="any" value="0.00" class="form-control" tabindex="5" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Importancia</label><br>
                    <select class="form-control" aria-label="Default select example" id="importancia" name='importancia' tabindex="6" required>
                        <option selected></option>
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Zona asignada</label><br>
                    <select class="form-control"  aria-label="Default select example" id="zona" name='zona' tabindex="6" required>
                        <option selected></option>
                        @foreach ($Zonas as $zona)
                        @if ($zona->editado==1)
                            <option value={{$zona->id}}>{{$zona->nombre}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Recomendación</label>
                    <input id="recomendacion" name="recomendacion" type="text" class="form-control" tabindex="7" required>
                </div>
                <!-- Botones -->
                <div class="text-center">
                    <a href="/alarmas" class="btn btn-secondary" tabindex="8">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Card -->

@endsection
