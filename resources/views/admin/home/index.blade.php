@extends('adminlte::page')

@section('title', 'SisTransfer')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-cash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Saldo Atual a</span>
              <span class="info-box-number">R$ 0,00</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion-arrow-graph-up-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Alcance</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pesquisas</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Campanha</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    new Chart(document.getElementById("lineChart"), {
            "type": "line",
            "data": {
                "labels": [
                    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"
                ],
                "datasets": [{
                    "label": "Saldo",
                    "data": [
                        65, 59, 80, 81, 56, 95, 110
                    ],
                    "fill": false,
                    "borderColor": "rgb(20, 255, 115)",
                    "lineTension": 0.1
                }]
            },
            "options": {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    new Chart(document.getElementById("pieChart"), {
            "type": "doughnut",
            "data": {
                "labels": [
                    "Green","Red", "Blue", "Oranje"
                ],
                "datasets": [{
                    "label": "My First Dataset",
                    "data": [
                        125, 80, 60, 100
                    ],
                    "backgroundColor": [
                      "rgb(20, 255, 115)","rgb(255, 70, 75)", "rgb(54, 162, 235)", "rgb(255, 195, 20)"
                    ]
                }]
            }
        });
</script>
    
@stop
