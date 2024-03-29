@extends('adminlte::page')
@section('title', 'Inicio | Proyecto Arduino')
@section('content')

    <h1>Dashboard vista admin</h1>

    <?php
        $x = shell_exec('php C:\users\Personal\Documents\GitHub\Sistemas_Embebidos_Temperatura_Humedad\artisan schedule:run');
      //Echo "$x";
    ?>

@foreach($alarmas as $alarma)
    @if($alarma->status==1)
    <p> <?php $alarma_importancia = $alarma->importancia ?></p>
    <p> <?php $alarma_nombre = $alarma->nombre ?></p>
    <p> <?php $alarma_id_zona = $alarma->id_Zona ?></p>
        @foreach($zonas as $zona)
        @if($zona->id == $alarma_id_zona)
        <p> <?php $zona_nombre = $zona->nombre ?></p>
        <p> <?php $zona_id_Cultivo = $zona->id_Cultivo ?></p>
        @foreach($cultivos as $cultivo)
        @if($cultivo->id == $zona_id_Cultivo)
        @switch(true)
        @case($alarma_importancia=='Baja')

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <strong>Warning</strong>
            <br>
            La Alarma "{{$alarma_nombre}}" de importancia {{$alarma_importancia}}  se ha activado ir a revisar la zona de cultivo de {{$zona_nombre}} que cultiva {{$cultivo->nombre}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @break

        @case($alarma_importancia=='Media')

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <strong>Warning</strong>
            <br>
            La Alarma "{{$alarma_nombre}}" de importancia {{$alarma_importancia}}  se ha activado ir a revisar la zona de cultivo de {{$zona_nombre}} que cultiva {{$cultivo->nombre}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @break

        @case($alarma_importancia=='Alta')

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <strong>Warning</strong>
                <br>
                La Alarma "{{$alarma_nombre}}" de importancia {{$alarma_importancia}}  se ha activado ir a revisar la zona de cultivo de {{$zona_nombre}} que cultiva {{$cultivo->nombre}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @break

        @endswitch
        @endif
        @endforeach

        @endif
        @endforeach

    @endif
    @endforeach

    <div class="card">
        <div class="card-body">
            <h3 class="text-center">Zona 1</h3>
            <canvas id="zona1"></canvas>
        </div>
    </div>

    @section('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('zona1');
        const datax = {!! json_encode($data) !!};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Temperatura',
                    data: datax,
                    borderWidth: 1
                }, {
                    label: 'Humedad',
                    data: [10, 17, 3, 7, 2, 5],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    @endsection

@endsection
