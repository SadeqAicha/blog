<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Posts</title>
    <!--For icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <!-- Start Content -->
     <div class="content text-white">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Side area -->
                <?php include("include/dashboard-side-area.php") ?>
                <!-- End Side area -->
                <!-- Start all posts table -->
                <div class="col-md-10" class="main-area">
                    <table class="table  table-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_content"></tbody>
                    </table>
                </div>
                <!-- End all posts table -->
            </div>
        </div>
    </div>
    <div class="dark_membrane" id="dark_membrane"></div>
    <div class="update_container" id="update_container">
        
    </div>
   
    <!-- End Content -->
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/all-posts.js"></script>
</body>
</html>