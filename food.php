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
                    <!-- end logo -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end contaier-fluid -->
    <nav class="navbar navbar-light bg-img">
        <div class="container-fluid">
            <form class="d-flex mx-auto col-md-6">
                <input class="form-control me-2" type="search" placeholder="Search for Food.." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>     
        </div>
        <!-- end container-fluid -->
    </nav>
    <!-- end nav search -->
        <!-- food menu -->
        <div class="p-2 mb-2 text-dark my-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <h2><p class="text-center"> Food Menu</p></h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Food Title</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chickenn and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-burger.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Smoky Burger</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chicken, and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->                  
                            </div> <!--end col-md-6-->

                            <div class="col-md-6">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-burger.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Nice Buger</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chickenn and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Food Title</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chicken, and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->      
                            </div> <!--end col-md-6-->

                            <div class="col-md-6">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-burger.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Nice Buger</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chickenn and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->
                            </div> <!--end col-md-6-->

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Food Title</h5>
                                                <p class="card-text">$2.3</p>
                                                <p class="card-text food-detail"><small class="text-muted">Made with Italian Sauce, Chicken, and organice vegetables</small></p>
                                                <a href="" class="btn btn-outline-success">Order now</a>
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                                </div> <!--end card mb-3-->      
                            
                        
                        </div> <!--end row-->

                    </div> <!--end container-->

                    </div> <!--end col-md-12-->
                </div> <!--end row-->
                <p class="text-center">
                <class style="color:#ff6b81"> See All Foods</p>
            </div> <!--end container-fluid-->
        </div> <!--end food menu-->
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