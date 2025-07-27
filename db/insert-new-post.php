<?php
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image = $_FILES['image'];
    $destination = 'uploads/'.time();
    move_uploaded_file($image['tmp_name'],$destination);
}
include("connection.php");
$stmt=$pdo->prepare("INSERT into posts (post_title, post_category, post_image, post_content) values(:title,:category,:img,:content)");
$stmt->execute(['title'=>$title,'category'=>$category,'img'=>$destination,'content'=>$content]);
