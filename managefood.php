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
                    <ul class="nav justify-content-center border-bottom border-2 border-dark">
                            <li class="nav-item">
                                <a class="nav-link " href="index.php">Home</a>
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
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
        <div class=container-fluid bg-light>
            <div class="contaier">
                <div class="row">
                    <div class="col">
                        <h1>Manage Food</h1>
                        <button type="button" class="btn-primary my-btn">Add Food</button>
                        <!-- table -->
                        <div class="table-responsive">
                            <table class="table table1 table-image mx-auto">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>S.N</p>
                                        </th>
                                        <th scope="col">
                                            <p>Title</p>
                                        </th>
                                        <th scope="col">
                                            <p>Price</p>
                                        </th>
                                        <th scope="col">
                                            <p>Image</p>
                                        </th>
                                        <th scope="col">
                                            <p>Feature</p>
                                        </th>
                                        <th scope="col">
                                            <p>Active</p>
                                        </th>
                                        <th scope="col">
                                            <p>Actions</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dumplings Specials</td>
                                        <td>$5.00</td>
                                        <td><img class="my-img" src="img/menu-momo.jpg" alt=""></td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Best Burger</td>
                                        <td>$4.00</td>
                                        <td><img class="my-img" src="img/burger.jpg" alt=""></td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Smoky BBQ Pizza</td>
                                        <td>$6.00</td>
                                        <td><img class="my-img" src="img/menu-pizza.jpg" alt=""></td>
                                        <td>No</td>
                                        <td>Yes</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Sadeko Momo</td>
                                        <td>$6.00</td>
                                        <td><img class="my-img" src="img/menu-momo.jpg" alt=""></td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Mixed Pizza</td>
                                        <td>$10.00</td>
                                        <td><img class="my-img" src="img/menu-pizza.jpg" alt=""></td>
                                        <td>No</td>
                                        <td>Yes</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Sed ipsum cillum in</td>
                                        <td>$52.00</td>
                                        <td style="color:#FF6666">Image not Added</td>
                                        <td>No</td>
                                        <td>No</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Update Food</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Food</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        <!-- end table table1 -->
                        </div>
                        <!-- end table-responsive -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end container fluid bg-light -->
         <!-- start footer -->
        <div class="table-responsive">
            <div class="my-footer">          
                <footer>
                    <div class="text-center p-3 text-white" style="background-color: #FF6666">
                        2020 All rights reserved, Food House. Developed By
                        <a class="text-indigo-800" href="#">-CSE485</a>
                    </div>
                </footer>
            </div>  
            <!-- end footer -->
        </div>
    </div>
    <!-- end wrapper -->





<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/bootstrap@5.0.2"></script>
</body>
</html>
