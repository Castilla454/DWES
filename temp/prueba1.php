<?php
// Ejemplo: Generar las opciones de un selector de año de nacimiento.
echo '<label for="anio">Año de nacimiento:</label>';
echo '<select name="anio" id="anio">';

$anioActual = date('Y');
for ($i = $anioActual; $i >= $anioActual - 100; $i--) {
    echo "<option value='$i'> $i </option>";
}

echo '</select>';

echo '<label for="mes">Mes:</label>';
echo '<select name="mes" id="mes">';

$mesActual = date('m');
for ($i = 1; $i <=12; $i++) {

  if($i == $mesActual){
   echo "<option value='$i' selected> $i </option>";
  } else {
  echo"<option value='$i'> $i </option>";

  }
}
 
echo '</select>';

echo '<label for="dia">Dia:</label>';
echo '<select name="dia" id="dia">';

$diaActual = date('j');
for ($i = 1; $i <=31; $i++) {
    if($i == $diaActual){
echo "<option value='$i' selected> $i </option>";
    } else {
    echo "<option value='$i'> $i </option>";
    }
}

echo '</select>';
?>