<?php
$numeros = [12, 45, 23, 9, 67];

$maximo = $numeros[0];
$posicion = 0;

for ($i = 1; $i < count($numeros); $i++) {

    if ($numeros[$i] > $maximo) {
        $maximo = $numeros[$i];
        $posicion = $i;
    }
}

echo "El número máximo es: " . $maximo . " y se encuentra en la posición: " . $posicion;