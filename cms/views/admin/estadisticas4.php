<?php
require_once("./views/admin/navbar.php");
require_once("./controllers/EstadisticasController.php");
$respuesta=new EstadisticasController();
$datos=$respuesta->ctrlListarCalificacionActidComp();


?>
<div class="container-fluid contenedor">
    <div class="row encabezado">
        <div class="col-12 bg-warning">
            <h2 class="">Average Qualification vs Activities Completeds</h2>
            <a href="?page=estadisticas/1" class="btn btn btn-success mb-2 boton" >time in courses VS time in activities</a>
            <a href="?page=estadisticas/2" class="btn btn-info mb-2 boton">Average Qualification vs time in courses</a>
            <a href="?page=estadisticas/3" class="btn btn-dark mb-2 boton">time in courses VS time in activities</a>
            <a href="?page=estadisticas/4" class="btn btn-dark mb-2 boton">Average Qualification vs Activities Completeds</a>
            <a href="?page=estadisticas/5" class="btn btn-dark mb-2 boton">Average Qualification vs Activities Completeds</a>

        </div>
    </div>
    <div class="row">
        <div class="col mt-2">
            <div class="graficos">
                <div class="card-header text-center bg-success">Average Qualification vs Activities Completeds</div>
                <canvas id="grafica"></canvas>
            </div>

        </div>
    </div>
    <table class="table table-responsive-md table-light tabla">
                            <thead>
                                <tr>
                                    <th>Average Qualification</th>
                                    <th>actividades completadas</th>
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


</div>
<script>
       // Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
const $grafica2 = document.querySelector("#grafica2");
// Las etiquetas son las que van en el eje X. 
const etiquetas = [
    <?php
     foreach ($datos as $key) {
                echo "'".$key['categoria']."'".",";
        
                                    }
    ?>




]
// Podemos tener varios conjuntos de datos
const datosVentas2020 = {
    label: "Average Qualification",
    data: [
        <?php
         foreach ($datos as $key) {
             echo $key["avg(CalificaciónMedia)"].",";
         }
        ?>



    ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)', // Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Activities Completeds",
    data: [
        <?php
         foreach ($datos as $key) {
             echo $key["avg(ActividadesCompletadas)"].",";
         }
        ?>


     ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)',// Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};
var options = {
  reponsive:true,
  maintainAspectRatio: false,
  scales: {
    y: {
      stacked: true,
      grid: {
        display: true,
        color: "rgba(255,99,132,0.2)"
      }
    },
    x: {
      grid: {
        display: false
      }
    }
  }
};

new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            datosVentas2021,
            // Aquí más datos...
        ]
    },
    options: options
});

new Chart($grafica2, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,

            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});

</script>