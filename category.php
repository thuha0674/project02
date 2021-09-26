<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <!-- logo -->
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <img class="my-logo" src="img/logo.png" alt="">      
                                <div class="container1">
                                    <ul class="nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Admin</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="manageuser.php">Manage User</a></li>
                                                <li><a class="dropdown-item" href="managecategory.php">Manage Category</a></li>
                                                <li><a class="dropdown-item" href="managefood.php">Manage Foods</a></li>
                                                <li><a class="dropdown-item" href="manageorder.php">Manage Order</a></li>
                                                <li><a class="dropdown-item" href="#">DashBroad</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">Admin</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="category.php">Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="food.php">Food</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="order.php">Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end container -->
                            </div>
                            <!-- end container-fluid -->
                
                        </nav>
                        
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
        </div>
        <!-- end contaier-fluid end logo-->

        <!-- category -->
        <div class="container-fluid my-explore">
            <h1 class="row justify-content-md-center">Explore Foods</h1>
            <div class="row row1">
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/pizza.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title top">Pizza</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/burger.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Burger</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/momo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Momo</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
            </div>
            <!-- end row -->
            <div class="row row1">
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/pizza.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title top">Pizza</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/burger.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Burger</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/momo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Momo</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
            </div> <!--end row-->
            <div class="row row1">
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/pizza.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title top">Pizza</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/burger.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Burger</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="img/momo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h3 class="card-title  top">Momo</h3>
                        </div>
                    </div>
                </div>
                <!-- end col-md-4 -->
            </div>
        </div> 
        <!-- end category -->

       <!-- footer -->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 social text-center letf">
                <ul>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" /></a>
                    </li>
                </ul>
            </div> <!--end col-->
        </div> <!--end row-->
        </div> <!--end container-fluid-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>All rights reserved.Designed By <a href="#" class="my-text">ThuHa</a></p>
                </div>
            </div>
        </div> <!--end container-fluid-->
        </div>
        <!-- end footer -->

    </div>
    <!-- end wrapper -->

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/bootstrap@5.0.2"></script>
</body>
</html>

</body>