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
    <!-- starts div wrapper -->
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
            </div>
        </div>
        <!-- End container-fluid -->
        
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Manage User</h1>
                        <button type="button" class="btn-primary my-btn">Add New User</button>

                        <!-- table -->
                        <div class="table-responsive">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p>S.N</p>
                                        </th>
                                        <th scope="col">
                                            <p>Full Name</p>
                                        </th>
                                        <th scope="col">
                                            <p>Usename</p>
                                        </th>
                                        <th scope="col">
                                            <p>Actions</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Arsentino Leach</td>
                                        <td>todowaxobi</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Change Password</button>
                                                </div>
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-secondary my-btn">Update Admin</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Admin</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Sasha Mendez</td>
                                        <td>goxemyde</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Change Password</button>
                                                </div>
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-secondary my-btn">Update Admin</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Admin</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Vijay Thapa</td>
                                        <td>VijayThapa</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Change Password</button>
                                                </div>
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-secondary my-btn">Update Admin</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Admin</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Administrator</td>
                                        <td>admin</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-primary my-btn">Change Password</button>
                                                </div>
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-secondary my-btn">Update Admin</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-info my-btn">Delete Admin</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- ends table -->
                        </div>
                        <!-- ends table-responsive -->
                       
                    </div>
                    <!-- ends col -->
                </div>
                <!-- ends div row -->              
            </div>
            <!-- ends container -->
        </div>
        <!-- ends container-fluid -->
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
<!-- ends wrapper-->

     <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/bootstrap@5.0.2"></script>
</body>

</html>