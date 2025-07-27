<?php
include("connection.php");
$stmt = $pdo->query("SELECT * from posts");
$data = $stmt->fetchAll();

echo json_encode($data);