<?php
include("connection.php");
$stmt = $pdo->query("SELECT * from categories");
$data = $stmt->fetchAll();

echo json_encode($data);