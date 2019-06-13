<?php
    define("BASE_URL", "http://localhost:8080/UX-for-dengue/dataCollect/");
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
        <a class="col-3 offset-9" href="developers.php">

            <div class="btn 
                        btn-dark
                        col-12
                        text-left
                        mt-5">

                <i class="fas fa-code fa-2x"></i>
                <label class="homeFont"></label>

            </div>
        </a>
    </div>
</div>

<div class="container-fluid" style="margin-top:28%">

    <div class="row mt-3">

        <a class="col-md-12" href="dataCollect/">

            <div class="btn
                        btn-collect
                        col-md-12
                        text-left" >

                <i class="fas fa-address-card fa-5x"></i>
                <label class="homeFont">Anamnese</label>

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