<?php
$arregloA = [1, 2, 3, 4, 5];
$arregloB = [1, 2, 3, 4, 5];

$arregloC = [];

for ($i = 0; $i < count($arregloA); $i++) {
$arregloC[] = $arregloA[$i] + $arregloB[$i];

}

print_r($arregloC);