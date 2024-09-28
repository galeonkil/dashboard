<script type="">
    // Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
const $grafica2 = document.querySelector("#grafica2");
// Las etiquetas son las que van en el eje X. 
const etiquetas = [
    <?php
     foreach ($datos as $key) {
                echo "'".$key['especialidad']."'".",";
        
                                    }
    ?>

]
// Podemos tener varios conjuntos de datos
const datosVentas2020 = {
    label: "Time in Activities Hours",
    data: [
        <?php
        foreach ($datos as $key2 ) {
            echo $key2['TiempEnCursosHrs'].",";
        }
        ?>
    ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)', // Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Time in courses Hours",
    data: [
        <?php
        foreach ($datos as $key3) {
            echo $key3['TiempEnActividadesHrs'].",";

        }
        ?>
    ], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)',// Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};
var options = {
  maintainAspectRatio: false,
  scales: {
    y: {
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

});

</script>