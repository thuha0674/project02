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
        <!-- End container-fluid -->
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Manage Order</h1>
                  <!--table-->
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>S.N</p>
                                        </th>
                                        <th scope="col">
                                            <p>Food</p>
                                        </th>
                                        <th scope="col">
                                            <p>Price</p>
                                        </th>
                                        <th scope="col">
                                            <p>Qty</p>
                                        </th>
                                        <th scope="col">
                                            <p>Total</p>
                                        </th>
                                        <th scope="col">
                                            <p>Order Date</p>
                                        </th>
                                        <th scope="col">
                                            <p>Status</p>
                                        </th>
                                        <th scope="col">
                                            <p>Customer Name</p>
                                        </th>
                                        <th scope="col">
                                            <p>Contact</p>
                                        </th>
                                        <th scope="col">
                                            <p>Email</p>
                                        </th>
                                        <th scope="col">
                                            <p>Address</p>
                                        </th>
                                        <th scope="col">
                                            <p>Actions</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Mixed Pizza</td>
                                        <td>10.00</td>
                                        <td>2</td>
                                        <td>20.00</td>
                                        <td>2020-11-30 04:07:17</td>
                                        <td class="delivered">Delivered</td>
                                        <td>Jana Bush</td>
                                        <td>+1(562) 101-2028</td>
                                        <td>tydujy@mailinator.com</td>
                                        <td>minima iure ducimus</td>
                                        <td>Update Order</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Best Burger</td>
                                        <td>4.00</td>
                                        <td>4</td>
                                        <td>16.00</td>
                                        <td>2020-11-30 03:52:43</td>
                                        <td class="delivered">Delivered</td>
                                        <td>Kelly Dillard</td>
                                        <td>+1(908) 914-3106</td>
                                        <td>fexekihor@mailinator.com</td>
                                        <td>Incidunt ipsum ad d</td>
                                        <td>Update Order</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Sadeko Momo</td>
                                        <td>6.00</td>
                                        <td>3</td>
                                        <td>18.00</td>
                                        <td>2020-11-30 03:49:48</td>
                                        <td class="cancelled">Cancelled</td>
                                        <td>Bradley Farrell</td>
                                        <td>+1(576) 504-4657</td>
                                        <td>zuhafiq@mailinator.com</td>
                                        <td>Duis aliqua Qui lor</td>
                                        <td>Update Order</td>
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
        <!-- end container-fluid bg-light -->

        <!-- footer -->
        <div class="table-responsive">
             <div class="my-footer">          
                <footer>
                    <div class="text-center p-3 text-white" style="background-color: #FF6666">
                        2020 All rights reserved, Food House. Developed By
                        <a class="text-indigo-800" href="#">-CSE485</a>
                    </div>
                </footer>
           </div>            
        </div>
        <!-- end footer -->
    </div>
<!-- end wrapper -->
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/bootstrap@5.0.2"></script>
</body>
</html>