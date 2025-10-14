<?php
$departamentoId = 2;
$nombreDepartamento = '';


$nombreDepartamento = match($departamentoId){
1 => 'Tecnologia',
2 => 'Recursos Humanos',
3 => 'Marketing',
default => 'Desconocido'
};


echo "El departamento seleccionado es: $nombreDepartamento";
?>