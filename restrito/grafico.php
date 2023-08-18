<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>

<body>

    <?php

    include "./base/DB.class.php";
    include "./base/Funcoes.class.php";

    $database = new DB();

    $dados = $database->get_results("SELECT
                                    *
                                    FROM pessoas
                                    ");
    printR($dados);
    ?>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Pie charts are very popular for showing a compact overview of a
            composition or comparison. While they can be harder to read than
            column charts, they remain a popular choice for small datasets.
        </p>
    </figure>

    <script>
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in May, 2020',
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 70.67,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Edge',
                    y: 14.77
                }, {
                    name: 'Firefox',
                    y: 4.86
                }, {
                    name: 'Safari',
                    y: 2.63
                }, {
                    name: 'Internet Explorer',
                    y: 1.53
                }, {
                    name: 'Opera',
                    y: 1.40
                }, {
                    name: 'Sogou Explorer',
                    y: 0.84
                }, {
                    name: 'QQ',
                    y: 0.51
                }, {
                    name: 'Other',
                    y: 2.6
                }]
            }]
        });
    </script>

    <a href="index.php" class="btn btn-primary">Voltar</a>



    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>