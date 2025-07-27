<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents('php://input'),true);

include("connection.php");
$stmt = $pdo->query("SELECT * from posts where post_id=:id");
$stmt->execute([':id'=>$data['id']]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My blog</title>
    <link rel="stylesheet" href="css/index.css">
    <!--For icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--Start navbar-->
    <?php include("include/header.php") ?>
    <!--End navbar-->

    <!--Start Content-->
    <div class="content">
        <div class="container">
        <div class="post" id="post">
            <div class="post-image">
            <img src="db/${data.post_image}" alt="image" >
            </div>
            <div class='post-title'><b><?php $post['post_title']?></b></div>
            <div class="post-details">
                <p class="post-info">
                    <span><i class="fa-solid fa-user"></i>Aicha</span>
                    <span><i class="fa-solid fa-tags"></i><?php $post['post_category']?></span>
                    <span><i class="fa-solid fa-calendar-days"></i><?php $post['post_date']?></span>
                </p>
                <p class="read_mode_text"><?php $post['post_content']?></p>
            </div>
        </div>
        </div>
    </div>
    <!--End Content-->

    <!--Start footer-->
    <?php include("include/footer.php") ?>
    <!--End footer-->
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>