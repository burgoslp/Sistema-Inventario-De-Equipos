@extends('layouts.app')
@section('titulo')
    Estadisticas / 
@endsection
@section('enlaces')
    Estadisticas /
@endsection
@section('contenido')
<div class="px-5 mb-5">
    <div class="w-full ">
        <canvas id="myChart">

        </canvas>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["monitores", 'teclados', 'ratones','ordenadores','laptops'],
      datasets: [{
        label: 'Equipos Tecnológicos',
        data: [{{count($monitores)}}, {{count($teclados)}}, {{count($ratones)}}, {{count($ordenadores)}}, {{count($laptops)}}],
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

