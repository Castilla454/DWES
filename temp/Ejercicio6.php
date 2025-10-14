<?php
$nombreFichero = 'informe_trimestral.xlsx';
$categoria = '';


if(str_ends_with($nombreFichero,'.pdf') ){

$categoria = "Documento pdf";

} else if (str_ends_with($nombreFichero,'.docx') ){


    $categoria = "Documento Word";
} else if (str_ends_with($nombreFichero,'.xlsx') ){


    $categoria = "Hoja de Cálculo";
} else {


    $categoria = "Fichero desconocido";
}

echo "<p> El fichero $nombreFichero ha sido clasificado como: $categoria</p>";





?>