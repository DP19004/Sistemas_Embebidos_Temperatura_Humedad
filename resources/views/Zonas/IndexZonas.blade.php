@extends('layouts.plantillabase');
@section('contenido')

    <a href="Zonas/create" btn ="success">
    </a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
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
                <th scope="row">{{$zona->Id}}</th>
                <td>{{$zona->Nombre}}</td>
                <td>{{$zona->Latitud}}</td>
                <td>{{$zona->Longitud}}</td>
                <td>{{$zona->Periodo}}</td>
            </tr>
            @endforeach
          
        </tbody>
    </table>    
@endsection