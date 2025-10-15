<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor de Plantillas</title>
</head>

<body>
    <h1>Motor de Plantillas en PHP</h1>

    <?php
    $plantillaEmail = "Hola, {{nombre}}.\n\nTe informamos que tu solicitud de vacaciones para las fechas {{fechas}} ha sido {{estado}}.\n\nGracias,\nEl equipo de NexusCore.";

    $datosParaEmail = [
        'nombre' => 'Luis Campos',
        'fechas' => 'del 01/08 al 15/08',
        'estado' => 'aprobada'
    ];


    function render(string $plantilla, array $datos): string
    {


        foreach ($datos as $clave => $valor) {

            $marcador = '{{' . $clave . '}}';

            $plantilla = str_replace($marcador, $valor, $plantilla);


        }

        return $plantilla;

    }

    echo render($plantillaEmail, $datosParaEmail);




    ?>
</body>

</html>