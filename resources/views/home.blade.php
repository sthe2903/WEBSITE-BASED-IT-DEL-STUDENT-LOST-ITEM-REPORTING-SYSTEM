@extends('layout.layaouts')
@extends('layout.header')

@section('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootsrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<style>

    .jumbotron {
         position: relative;
        
         width: 100%;
         height: 100%;
         background-size: cover;
         overflow:  hidden;
         padding: 250px;
         filer:  blur(5px);
         margin-top:-500px;
         

    }
    .btn-success{
        background-color: #005B66;
    }
</style></head>
<body> <img src="img/background1.png" alt="" style="width: 1300px;border-radius:none;height:600px;">
      
<div class="jumbotron">
    <div class="container">
    <h1>Selamat Datang di Website Kami</h1>
    <p1>Laporkan dan Temukan barangmu dengan mudah disini.</p1><br><br>
    </div>   

   
  
    </body>
    <div id="container" style="margin-top:200px">
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
                        maxWidth: 600
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
         </div>
</body>
</html>













@endsection

@section('foother')

@endsection