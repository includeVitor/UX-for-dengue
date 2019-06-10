<?php
    define("BASE_URL", "http://192.168.15.10:8080/UX-for-dengue/dataCollect/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decisões</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/fontawesome/css/all.css" />
</head>
<body>
    
<div class="container-fluid"> 
    <div class="row">
        <a class="col-8" href="developers.php">

            <div class="btn 
                        btn-dark
                        col-12
                        text-left
                        mt-5">

                <i class="fas fa-code fa-2x"></i>
                <label class="homeFont">Desenvolvedores</label>

            </div>
        </a>
    </div>
</div>

<div class="container-fluid" style="margin-top:35%">

    <div class="row mt-3">

        <a class="col-md-12" href="dataCollect/">

            <div class="btn
                        btn-collect
                        col-md-12
                        text-left" >

                <i class="fas fa-address-card fa-5x"></i>
                <label class="homeFont">Coleta de Dados</label>

            </div>

        </a>

    </div>

    <div class="row mt-3">

        <a class="col-md-12" href="dataAnalysis/">

            <div class="btn 
                        btn-analyze
                        col-md-12
                        text-left">
                        
                <i class="fas fa-chart-line fa-5x"></i>
                <label class="homeFont">Análise de Dados</label>

            </div>

        </a>

    </div>


    

</div>   
</body>
</html>