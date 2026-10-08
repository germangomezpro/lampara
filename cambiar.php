<?php
$pdo = new PDO('mysql:host=localhost;dbname=lampara;charset=utf8mb4', 'root', '');

$pdo->exec('UPDATE lampara SET encendida = NOT encendida WHERE id = 1');

$resultado = $pdo->query('SELECT encendida FROM lampara WHERE id = 1');
$fila = $resultado->fetch(PDO::FETCH_ASSOC);

echo json_encode($fila);