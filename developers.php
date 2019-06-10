<?php
    define("BASE_URL", "http://192.168.15.10:8080/UX-for-dengue/dataCollect/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desenvolvedores</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/fontawesome/css/all.css" />
</head>
<body>

<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-12 mt-2 text-center">
            <h2 class="font-weight-light"><i class="fas fa-users"></i> O time</h2>
        </div>
    </div>    
    <hr class="hr-user">

    <div class="row mt-4">
        <div class="col-12 text-left">
            <a href="/Ux-for-dengue/"><i class="fas fa-home btn btn-dark btn-lg"></i></a>
        </div>
    </div>


    <div class="row mt-5">

        <div class="col-6 text-center">
            <h3 class="font-weight-lighter">Vitor Hugo</h3>
            <img src="<?php echo BASE_URL; ?>assets/images/vitor.jpg".." class="rounded-circle mx-auto d-block img-thumbnail" width="150"  alt="...">
        </div>

        <div class="col-6 text-center">
            <h3 class="font-weight-lighter">Brenda Luane</h3>
            <img src="<?php echo BASE_URL; ?>assets/images/brenda.jpg".." class="rounded-circle mx-auto d-block img-thumbnail" width="150"  alt="...">
        </div>

    </div>

    <div class="row mt-5">

        <div class="col-6 text-center">
            <h3 class="font-weight-lighter">Camila Barcellos</h3>
            <img src="<?php echo BASE_URL; ?>assets/images/camila.jpg".." class="rounded-circle mx-auto d-block img-thumbnail" width="150"  alt="...">
        </div>

        <div class="col-6 text-center">
            <h3 class="font-weight-lighter">Matheus Leoni</h3>
            <img src="<?php echo BASE_URL; ?>assets/images/matheus.jpg".." class="rounded-circle mx-auto d-block img-thumbnail" width="150"  alt="...">
        </div>

    </div>
</div>

</body>

</html>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.maskMoney.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>