<?php
// Array asociativo con los logs. Cada elemento es un registro.
$logActividad = [
    ['timestamp' => '2025-07-28 14:10:00', 'nivel' => 'INFO', 'mensaje' => 'Usuario conectado: admin'],
    ['timestamp' => '2025-07-28 14:12:00', 'nivel' => 'WARNING', 'mensaje' => 'Uso de CPU al 85%'],
    ['timestamp' => '2025-07-28 14:15:00', 'nivel' => 'CRITICAL', 'mensaje' => 'No se puede conectar a la base de datos'],
    ['timestamp' => '2025-07-28 14:20:00', 'nivel' => 'INFO', 'mensaje' => 'Nuevo artículo publicado'],
    ['timestamp' => '2025-07-28 14:22:00', 'nivel' => 'CRITICAL', 'mensaje' => 'Fallo en el subsistema de pagos'],
];

echo "<h2> Log de Errores Criticos</h2>";

foreach($logActividad as $registro){


if(str_contains($registro,'CRITICAL')){

echo"<p style =' color : red;'> <strong> [timestamp] </strong> - [mensaje] </p>";


}

}

?>