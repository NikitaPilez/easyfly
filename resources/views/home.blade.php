@extends('welcome')

@section('content')
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Статистика и аналитика компании</h1>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <h4>График демонстрирует сколько заказов поступило на каждый тур в течении нескольких лет.</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list list-legend">
                            @foreach($ordersDataForFirstGraphicsLineNames as $configuration)
                                <li><span style="background-color:{{ $colorsConfiguration[$loop->iteration - 1] }}"></span>{{ $configuration['name'] }}</li>
                            @endforeach
                        </ul>
                        <div id="first_graphic"></div>
                    </div>
                </div>
                <h4>График демонстрирует сколько прибыли заработало агенство на этих турах за последние года.</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list list-legend">
                            @foreach($ordersDataForFirstGraphicsLineNames as $configuration)
                                <li><span style="background-color:{{ $colorsConfiguration[$loop->iteration - 1] }}"></span>{{ $configuration['name'] }}</li>
                            @endforeach
                        </ul>
                        <div id="second_graphic"></div>
                    </div>
                </div>
                <h4>График демонстрирует сколько заказов поступило на каждый месяц (за последние года), позволяет узнать какой месяц является самым продаваемым, и наоборот.</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <canvas id="chart-area-1"></canvas>
                    </div>
                </div>
                <h4>График демонстрирует средний возраст клиентов покупающих туры по месяцам.</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/chartjs/chart.min.js')}}"></script>
<script src="{{asset('js/chartjs/utils.js')}}"></script>
<script src="{{asset('js/moment/moment.min.js')}}"></script>
<script src="{{asset('js/morrisjs/raphael.min.js')}}"></script>
<script src="{{asset('js/morrisjs/morris.min.js')}}"></script>
<script>
    var ordersDataForFirstGraphics = {!! json_encode(array_values($ordersDataForFirstGraphicsData)) !!};
    var lineNames = {!! json_encode(array_values($ordersDataForFirstGraphicsLineNames)) !!};
    var colorsConfiguration = {!! json_encode(array_values($colorsConfiguration)) !!};
    var lineNameConfigurationForFirstGraphics = [];

    for(let i = 0; i < lineNames.length; i++) {
        lineNameConfigurationForFirstGraphics.push(lineNames[i].name);
    }

    var ordersDataForSecondGraphics = {!! json_encode(array_values($ordersDataForSecondGraphicsData)) !!};
    var lineNames = {!! json_encode(array_values($ordersDataForSecondGraphicsLineNames)) !!};

    var lineNameConfigurationForSecondGraphics = [];

    for(let i = 0; i < lineNames.length; i++) {
        lineNameConfigurationForSecondGraphics.push(lineNames[i].name);
    }

    jQuery(document).ready(function () {
        new Morris.Line({
            element: "first_graphic",
            data: ordersDataForFirstGraphics,
            xkey: "y",
            ykeys: lineNameConfigurationForFirstGraphics,
            labels: lineNameConfigurationForFirstGraphics,
            pointStrokeColors: colorsConfiguration,
            gridLineColor: "#e3e3e3",
            behaveLikeLine: !0,
            numLines: 6,
            gridtextSize: 14,
            lineWidth: 3,
            hideHover: "auto",
            lineColors: colorsConfiguration
        });
        new Morris.Bar({
            element: "second_graphic",
            data: ordersDataForSecondGraphics,
            xkey: "y",
            ykeys: lineNameConfigurationForSecondGraphics,
            labels: lineNameConfigurationForSecondGraphics,
            barGap: 0,
            barSizeRatio: 1,
            smooth: 1,
            gridLineColor: "#e3e3e3",
            numLines: 6,
            fillOpacity: 1,
            barColors: colorsConfiguration
        });
    });
</script>
<script>
    var ordersDataForThirdGraphics = {!! json_encode(array_values($ordersDataForThirdGraphicsData)) !!};


    var randomScalingFactor = function () {
        return Math.round(Math.random() * 100);
    };

    var config1 = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: ordersDataForThirdGraphics,
                backgroundColor: colorsConfiguration,
                label: 'Dataset 1'
            }],
            labels: [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: ''
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var ordersDataForFourthGraphics = {!! json_encode(array_values($ordersDataForFourthGraphics)) !!};

    var config2 = {
        type: 'line',
        data: {
            labels: [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ],
            datasets: ordersDataForFourthGraphics
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: ''
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Месяц'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Возраст'
                    },
                    ticks: {
                        min: 10,
                        max: 50,
                        stepSize: 5
                    }
                }]
            }
        }
    };

    window.onload = function () {

        var ctx1 = document.getElementById('chart-area-1').getContext('2d');
        window.myDoughnut = new Chart(ctx1, config1);

        var ctx2 = document.getElementById('canvas').getContext('2d');
        window.myLine = new Chart(ctx2, config2);
    };
</script>
