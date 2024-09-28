<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/icons/css/fontello.css">
    <?php
    	if ($_GET['page'] == 'blog' ||  $_GET['page'] == 'articulo' || $_GET['page'] == 'buscar') {
    		echo "<link rel='stylesheet' href='assets/css/nav.css'>";
    		echo "<link rel='stylesheet' href='assets/css/blog.css'>";
    	}

        if ($_GET['page'] == 'dashboard' || $_GET['page'] == 'publicar' ) {
            echo "<link rel='stylesheet' href='assets/css/dashboard.css'>";
        }
        if ($_GET['page'] == 'dashboard' || $_GET['page'] == 'estadisticas' || $_GET['page'] == 'estadisticas/1' || $_GET['page'] == 'estadisticas/2' || $_GET['page'] == 'estadisticas/3' || $_GET['page'] == 'estadisticas/4' || $_GET['page'] == 'estadisticas/5') {
            echo "<link rel='stylesheet' href='assets/css/dashboard.css'>";
            echo"<link rel='stylesheet' href='assets/css/graficos.css'>";
            echo"<script src='https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js'></script>";
            
        }
    ?>
    <title>CMS</title>
</head>
<body>