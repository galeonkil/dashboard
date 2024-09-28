<?php
require_once("navbar.php");
require_once("./controllers/EstadisticasController.php");
$respuesta=new EstadisticasController();
$datos=$respuesta->ctrlListartiempocTiempoact()
?>

<div class="container-fluid contenedor">
<div class="row encabezado">
    <div class="col-12 bg-warning">
        <h2 class="">Average Qualification vs Activities Completeds</h2>
        <a href="?page=estadisticas/1" class="btn btn btn-success mb-2 boton">time in courses VS time in activities</a>
        <a href="?page=estadisticas/2" class="btn btn-info mb-2 boton">Average Qualification vs time in courses</a>
        <a href="?page=estadisticas/3" class="btn btn-dark mb-2 boton">time in courses VS time in activities</a>
        <a href="?page=estadisticas/4" class="btn btn-danger mb-2 boton">Average Qualification vs Activities Completeds</a>
        <a href="?page=estadisticas/5" class="btn btn-dark mb-2 boton">Average Qualification vs Activities Completeds</a>
    </div>
</div>
<div class="row">
<div class="col mt-2">
            <div class="graficos">
                <div class="card-header text-center bg-success">time in courses VS time in activities</div>
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



</div>
<script>
    const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = ["Enero", "Febrero", "Marzo", "Abril"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "time in courses VS time in activities",
    data: [
        <?php
        foreach($datos as $key){
            echo "{x:".$key['TiempEnCursosHrs'].","."y:".$key['TiempEnActividadesHrs']."},";

        }
        ?>


    ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Ventas por mes",
    data: [{x:12,y:11},{x:24,y:12},{x:43,y:34},{x:62,y:42},{x:30,y:13},{x:17,y:53}], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(254, 182, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(254, 182, 235, 1)', // Color del borde
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
    type: 'scatter',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020
            // Aquí más datos...
        ]
    },
    options: options
});
</script>