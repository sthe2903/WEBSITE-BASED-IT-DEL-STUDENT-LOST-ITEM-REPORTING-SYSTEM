<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Highcharts Example - ItSolutionStuff.com</title>
</head>
   
<body>
<h1>IPK:</h1>
<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var formk =  <?php echo json_encode($formk) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Grafik Barang Hilang'
        },
        subtitle: {
            text: 'L A P O R K A N  S A J A !'
        },
         xAxis: {
            categories: ['elektonik', 'sehari-hari', 'uang']
        },
        yAxis: {
            title: {
                text: 'Jumlah Barang Hilang'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Barang Hilang',
            data: formk
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>