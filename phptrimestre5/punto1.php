<?php 
$valores = array();

for ($i = 0; $i <10; $i++) {
$valores[] = rand(0,10);

}

$suma = array_sum($valores);

$promedio = $suma / count($valores);

echo "valores: ";
print_r($valores);
echo "promedio: " . $promedio;
