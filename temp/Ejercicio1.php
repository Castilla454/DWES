<?php
// Ejemplo: Generar las opciones de un selector de año de nacimiento.
$rol = ['admin','editor','user'];

$rolIntroducido = "editor";
$esMiembroActivo = true;
$estadoAcceso= '';

if($rolIntroducido == 'admin'){

echo "<p style='color : green;'> Acceso al panel de administración  </p>";

}else {
echo "<p style='color : red;'> Acceso limitado al panel de contenidos  </p>";


}

$estadoAcceso = $esMiembroActivo ? "Acceso Permitido" : "Cuenta inactiva";

echo $estadoAcceso;
?>