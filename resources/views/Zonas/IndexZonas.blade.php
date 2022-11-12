@extends('adminlte::page')
@section('title', 'Zonas')
@section('content')
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
 --}}
<style>
    table{
      text-align: center;
      box-shadow: 0px 0px 15px #454545;
      -moz-box-shadow: 0px 0px 15px #454545;
      filter: progid:DXImageTransform.Microsoft.Shadow(color='#454545', Direction=135, Strength=4);    
    }
</style>

<br>
<h1 class="display-4 text-center">Gestionar Zonas</h1>

<div class="p-5">
  <br>
  <span class="tt" data-bs-placement="bottom" title="Agrega una nueva zona">
    <a href="Zonas/create" class="btn btn-primary">CREAR</a>
  </span>


  <br> <br>
  <div class="table-responsive">

    <table class="table table-striped table-dark">
      <thead>
        <tr class="bg-title">
          <th scope="col">Nombre</th>
          <th scope="col">Latitud</th>
          <th scope="col">Longitud</th>
          <th scope="col">Periodo de registro</th>
          <th scope="col">Kit de Sensores</th>
          <th scope="col">Alarmas</th>
          <th scope="col">Cultivos</th>
          <th scope="col">Acciones</th>
        </tr>
        </thead>
      <tbody>
        @foreach ($zonas as $zona)
        <tr>
          <td>{{$zona->nombre}}</td>
          <td>{{$zona->latitud}}</td>
          <td>{{$zona->longitud}}</td>
          <td>{{$zona->periodoDeRegistro}}</td>
          <td>{{$zona->id_Kit}}</td>
          <td>{{$zona->id_Alarma}}</td>
          <td>{{$zona->id_Cultivo}}</td>
          <td>
            <form action="{{route('Zonas.destroy',$zona->id)}}" method="POST">
              <a href="/Zonas/{{$zona->id}}/edit" class="btn btn-info" ata-toggle="tooltip" data-placement="top" title="Clic para editar la zona">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
              </a>
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" title="Elimina la zona">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                </svg>
              </button>
            </form>
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

{{-- Aqui intente crear un grafico pero creo que el problema esta en que no detecta la libreria desde esta vista
  tendria que insertarlo en el adminlte o algo asi 
  <div>
  Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: 'Browser market shares. January, 2022'
    },
    subtitle: {
        align: 'left',
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: <? = $data ?>
        }
    ],
  });
              
</div> --}}
@endsection