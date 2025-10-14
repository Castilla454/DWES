<?php
// Ejemplo: Pedir una clave hasta que sea correcta.
$claveCorrecta = "1234";
$intento = '';
$numIntento = 0;

do {
    // En una aplicación real, aquí obtendríamos la entrada del usuario.
    // Para este ejemplo, simulamos un intento aleatorio.
    $intento = rand(1000, 2000); 
    echo "<p>Intento con la clave: $intento...</p>";
    $numIntento ++;
} while ((string)$intento !== $claveCorrecta && ($numIntento < 100));

if( (string)$intento !== $claveCorrecta){

echo "<p style='color: red;'><strong>Acceso no concedido con la clave $intento despues de $numIntento intentos.</strong></p>";
} else {
echo "<p style='color: green;'><strong>Acceso concedido con la clave $intento despues de $numIntento intentos.</strong></p>";
}
?>