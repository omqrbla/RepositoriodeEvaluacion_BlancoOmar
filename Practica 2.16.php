<?php
$empleados = [
    ["nombre" => "Juan", "sueldo" => rand(1000,2000)],
    ["nombre" => "Ana", "sueldo" => rand(1000,2000)],
    ["nombre" => "Luis", "sueldo" => rand(1000,2000)],
    ["nombre" => "Marta", "sueldo" => rand(1000,2000)],
    ["nombre" => "Carlos", "sueldo" => rand(1000,2000)],
];

usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

echo "Empleados y sus sueldos (ordenados):<br>";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . ": $" . $empleado['sueldo'] . "<br>";
}

array_push($empleados, ["nombre" => "Elena", "sueldo" => 3200]);
array_push($empleados, ["nombre" => "Pedro", "sueldo" => 2800]);

echo "<br>Empleados y sus sueldos (con nuevos empleados):<br>";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . ": $" . $empleado['sueldo'] . "<br>";
}
?>