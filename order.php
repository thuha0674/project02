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
                    <!-- end logo -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end contaier-fluid -->

        <!-- order food -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-img">
                <h1 class="h1">Fill this form to confirm your order.</h1>
                    <div class="container-select">
                    <form role="form form1">
                        <legend>Selected Food</legend>
                        <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                                        </div> <!--end col-->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Food Title</h5>
                                                <p class="card-text">$2.3</p>
                                                <label class="form-label" for="typeNumber">Quantity</label>
                                                <input type="number" placeholder="1" id="typeNumber" class="form-control" />
                                                
                                            </div><!--end card body-->
                                        </div> <!--end col-md-8-->
                                    </div> <!--end row g-0-->
                        </div> <!--end card mb-3-->      
                    </form>                 
                        <form role="form form1">
                        <legend>Delivery Details</legend>
                        <div class=my-form>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" placeholder="E.g Thu Ha" id="typeText" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                <input type="tel" placeholder="E.g 0376xxx" id="typePhone" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea placeholder="E.g street, city, country" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                                            
                                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success">
                                    Confirm Order
                                </button>
                        </div>       
                        </form>
                    </div>
                    <!-- end container-select -->
                </div>
            <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

        <!-- end order food -->
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