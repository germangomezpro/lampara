<?php
$pdo = new PDO('mysql:host=localhost;dbname=lampara;charset=utf8mb4', 'root', '');

$fila = $pdo->query('SELECT encendida FROM lampara WHERE id = 1')->fetch(PDO::FETCH_ASSOC);

echo json_encode($fila);