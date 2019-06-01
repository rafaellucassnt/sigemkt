@extends('adminlte::page')

@section('title', 'SigeMKT')

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

            <div id="chart">
              <div id="timeline-chart"></div>
          </div>
          <div id="chart2"></div>
          <div id="chart3"></div>
          <div id="chart4"></div>
          <div id="chart5"></div>
          <div id="chart6"></div>
          <div id="chart7"></div>
        </div>
    </div>


    @endsection
@push('other_js')

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
  

<script>
  var options = {
      chart: {
          type: "area",
          height: 300,
          foreColor: "#999",
          scroller: {
          enabled: true,
          track: {
              height: 7,
              background: '#e0e0e0'
          },
          thumb: {
              height: 10,
              background: '#94E3FF'
          },
          scrollButtons: {
              enabled: true,
              size: 9,
              borderWidth: 2,
              borderColor: '#008FFB',
              fillColor: '#008FFB'
          },
          padding: {
              left: 30,
              right: 20
          }
          },
          stacked: true,
          dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
          }
      },
      colors: ['#00E396', '#0090FF'],
      stroke: {
          curve: "smooth",
          width: 3
      },
      dataLabels: {
          enabled: false
      },
      series: [{
          name: 'Total Views',
          data: generateDayWiseTimeSeries(0, 18)
      }, {
          name: 'Unique Views',
          data: generateDayWiseTimeSeries(1, 18)
      }],
      markers: {
          size: 0,
          strokeColor: "#fff",
          strokeWidth: 3,
          strokeOpacity: 1,
          fillOpacity: 1,
          hover: {
          size: 6
          }
      },
      xaxis: {
          type: "datetime",
          axisBorder: {
          show: false
          },
          axisTicks: {
          show: false
          }
      },
      yaxis: {
          tickAmount: 4,
          min: 0,
          labels: {
          offsetX: 24,
          offsetY: -5
          },
          tooltip: {
          enabled: true
          }
      },
      grid: {
          padding: {
          left: -5,
          right: 5
          }
      },
      tooltip: {
          x: {
          format: "dd MMM yyyy"
          },
      },
      legend: {
          position: 'top',
          horizontalAlign: 'left'
      },
      fill: {
          type: "solid",
          fillOpacity: 0.7
      }
      };

      var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

      chart.render();

      function generateDayWiseTimeSeries(s, count) {
      var values = [[
          4,3,10,9,29,19,25,9,12,7,19,5,13,9,17,2,7,5
      ], [
          2,3,8,7,22,16,23,7,11,5,12,5,10,4,15,2,6,2
      ]];
      var i = 0;
      var series = [];
      var x = new Date("11 Nov 2012").getTime();
      while (i < count) {
          series.push([x, values[s][i]]);
          x += 86400000;
          i++;
      }
      return series;
      }

  </script>

  <script>
      var options = {
          chart: {
              height: 350,
              type: 'bar',
          },
          plotOptions: {
              bar: {
                  dataLabels: {
                      position: 'top', // top, center, bottom
                  },
              }
          },
          dataLabels: {
              enabled: true,
              formatter: function (val) {
                  return val.toFixed(0) + "%";
              },
              offsetY: -20,
              style: {
                  fontSize: '12px',
                  colors: ["#304758"]
              }
          },
          series: [{
              name: 'Inflation',
              data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.245, 2.3, 1.4, 0.8, 0.5, -5.5]
          }],
          xaxis: {
              categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              position: 'top',
              labels: {
                  offsetY: -18,

              },
              axisBorder: {
                  show: false
              },
              axisTicks: {
                  show: false
              },
              crosshairs: {
                  fill: {
                      type: 'gradient',
                      gradient: {
                          colorFrom: '#D8E3F0',
                          colorTo: '#BED1E6',
                          stops: [0, 100],
                          opacityFrom: 0.4,
                          opacityTo: 0.5,
                      }
                  }
              },
              tooltip: {
                  enabled: true,
                  offsetY: -35,

              }
          },
          fill: {
              gradient: {
                  shade: 'light',
                  type: "horizontal",
                  shadeIntensity: 0.25,
                  gradientToColors: undefined,
                  inverseColors: true,
                  opacityFrom: 1,
                  opacityTo: 1,
                  stops: [50, 0, 100, 100]
              },
          },
          yaxis: {
              axisBorder: {
                  show: false
              },
              axisTicks: {
                  show: false,
              },
              labels: {
                  show: true,
                  formatter: function (val) {
                      return val.toFixed(0) + "%";
                  }
              }

          },
          title: {
              text: 'Monthly Inflation in Argentina, 2002',
              floating: true,
              offsetY: 320,
              align: 'center',
              style: {
                  color: '#444'
              }
          },
      }

      var chart = new ApexCharts(
          document.querySelector("#chart2"),
          options
      );

      chart.render();
  
  </script>


<script>
  
  var colors = ['#008FFB', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A', '#26a69a', '#D10CE8'];
      var options = {
          chart: {
              height: 350,
              type: 'bar',
              events: {
                  click: function(chart, w, e) {
                      console.log(chart, w, e )
                  }
              },
          },
          colors: colors,
          plotOptions: {
              bar: {
                  columnWidth: '45%',
                  distributed: true
              }
          },
          dataLabels: {
              enabled: false,
          },
          series: [{
              data: [21, 22, 10, 28, 16, 21, 13, 30]
          }],
          xaxis: {
              categories: ['John', 'Joe', 'Jake', 'Amber', 'Peter', 'Mary', 'David', 'Lily'],
              labels: {
                  style: {
                      colors: colors,
                      fontSize: '14px'
                  }
              }
          }
      }

      var chart = new ApexCharts(
          document.querySelector("#chart3"),
          options
      );

      chart.render();
</script>

<script>
  
  var options = {
          chart: {
              height: 350,
              type: 'bar',
              stacked: true,
              toolbar: {
                  show: true
              },
              zoom: {
                  enabled: true
              }
          },
          responsive: [{
              breakpoint: 480,
              options: {
                  legend: {
                      position: 'bottom',
                      offsetX: -10,
                      offsetY: 0
                  }
              }
          }],
          plotOptions: {
              bar: {
                  horizontal: false,
              },
          },
          series: [{
              name: 'PRODUCT A',
              data: [44, 55, 41, 67, 22, 43]
          },{
              name: 'PRODUCT B',
              data: [13, 23, 20, 8, 13, 27]
          },{
              name: 'PRODUCT C',
              data: [11, 17, 15, 15, 21, 14]
          },{
              name: 'PRODUCT D',
              data: [21, 7, 25, 13, 22, 8]
          }],
          xaxis: {
              type: 'datetime',
              categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
          },
          legend: {
              position: 'right',
              offsetY: 40
          },
          fill: {
              opacity: 1
          },
      }

     var chart = new ApexCharts(
          document.querySelector("#chart4"),
          options
      );
      
      chart.render();
</script>

<script>



var options = {
    chart: {
      height: 350,
      type: 'line',
    },
    series: [{
      name: 'Website Blog',
      type: 'column',
      data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
      name: 'Social Media',
      type: 'line',
      data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
    }],
    stroke: {
      width: [0, 4]
    },
    title: {
      text: 'Traffic Sources'
    },
     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    //labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
    xaxis: {
      type: 'month'
    },
    yaxis: [{
      title: {
        text: 'Website Blog',
      },

    }, {
      opposite: true,
      title: {
        text: 'Social Media'
      }
    }]

  }

  var chart = new ApexCharts(
    document.querySelector("#chart5"),
    options
  );

  chart.render();

</script>

<script>
var options = {
    chart: {
      height: 350,
      type: 'line',
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    
    stroke: {
      curve: 'straight'
    },
    series: [{
      name: "Desktops",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148.3]
    }],
    title: {
      text: 'Product Trends by Month',
      align: 'left'
    },
    colors:['#F44336'],
    dataLabels: {
              enabled: true,
              formatter: function (val) {
                  return val.toFixed(0) + "%";
              },
               position: 'top',
              offsetX: 10,
              style: {
                  colors: ["#304758"]
              }
          },
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      
    },
    yaxis: {
              axisBorder: {
                  show: true
              },
              axisTicks: {
                  show: false,
              },
              labels: {
                  show: true,
                  formatter: function (val) {
                      return val.toFixed(0) + "%";
                  }
              }

          },
  }

  var chart = new ApexCharts(
    document.querySelector("#chart6"),
    options
  );

  chart.render();


</script>
@endpush
