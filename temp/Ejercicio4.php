<?php 
$diaActual = date ('d');

$valorInicial = 10;

for($i = $valorInicial; $i >= 1; $i--){
    echo"<h2>Dia $diaActual</h2>";
    $diaActual++;

echo "<p style='color : green;'> Faltan $i dias para el evento </p>";

}

echo "<h2>¡Hoy es el gran día!</h2>";


?>