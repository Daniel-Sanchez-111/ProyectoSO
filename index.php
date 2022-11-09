<?php
    include_once 'app/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?=BASE_PATH?>public/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div style="text-align:center;">

        <img src="public/image/uabcs.png" style="height: 150px;">
        <img src="public/image/dasc.png" style="height: 150px; margin-left:5%;">

        <h2>
            Universidad Autonoma de Baja California Sur
        </h2>

        <h3>Departamento Academico de Sistemas Computacionales</h3>
        
        <h3>Ingenieria en Desarrollo de Software</h3>
        
        <h3>7mo. Semestre TM.</h3>
        <br>
        <h3>Sistemas Operativos</h3>
        <br>
        <h4>M.T.I Nelson Israel Higuera Castillo</h4>
        
        <h4>Daniel Eduardo Sánchez Carrillo</h4>
        
        <li>
            <ul><a href="<?=BASE_PATH?>view/fcfs.php" class="text-decoration-none">Algoritmo FCFS</a></ul>
            <ul><a href="<?=BASE_PATH?>view/sjn.php" class="text-decoration-none">Algoritmo SJN</a></ul>
            <ul><a href="<?=BASE_PATH?>view/hrnn.php" class="text-decoration-none">Algoritmo HRNN</a></ul>
        </li>

    </div>

</body>

</html>