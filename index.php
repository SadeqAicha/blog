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
            <div class="row">
                <div class="col-md-9" id=posts_container></div>
                <div class="col-md-3">
                    <!--Start Categories -->
                    <div class="categories">
                        <h4>Categories</h4>
                        <ul id="categories"></ul>
                    </div>
                    <!--End Categories -->
                    <!--Start Latest posts -->

                    <div class="last-posts">
                        <h4>Latest posts</h4>
                        <ul id="last-posts"></ul>
                    </div>

                    <!--End Latest posts -->
                </div>
            </div>
        </div>
    </div>
    <!--End Content-->

    <!--Start footer-->
    <?php include("include/footer.php") ?>
    <!--End footer-->
    <script src="js/index.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>