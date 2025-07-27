<?php
header("content-type: application/json");
$data = json_decode(file_get_contents('php://input'),true);


include("connection.php");

$stmt=$pdo->prepare("DELETE from categories where category_id = :id");
$stmt->execute(['id'=>$data['id']]);

echo json_encode(['success'=>true]);