<?php
require_once("navbar.php");
require_once("./controllers/EstadisticasController.php");
$respuesta=new EstadisticasController();
$datos=$respuesta->ctrListarTiempoProcesos();

?>

<div class="container-fluid contenedor">
    <?php
    require_once("./views/elements/header.php");
    ?>
    <div class="row">
        <div class="col  mt-2">
            <div class="graficos">
                <div class="card-header text-center bg-success">Ratio between time spent in courses and time spent in activities by specialty</div>
                <canvas id="grafica"></canvas>
            </div>

        </div>
    </div>
    <table class="table table-responsive-md table-light tabla">
                            <thead>
                                <tr>
                                    <th>Average Qualification</th>
                                    <th>Activities Completeds</th>
                                    <th>Categories</th>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>missing</td>
                                    </tr>
                                </tbody>
                            </thead>
    </table>
<script src="charts/charts1.js"></script>