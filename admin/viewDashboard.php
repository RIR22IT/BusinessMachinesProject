<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <style>
        form {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px;
            border: 1px solid #bbbbbb;
            border-radius: 5px;
        }

        .msg {
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
    </style>

    <title>BUSINESS MACHINES - Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('./pageWrapper.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../images//admin-img.jpg">
                            </a>
                        </li>
                        <!--logout btn-->
                        <li class="nav-item dropdown no-arrow" style="padding-top:15px; ">
                            <a href="logout.php?logout" class="btn btn-outline-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="width: 1500px;">
                    <!-- Page Heading -->
                    <center>
                        <h1 class="h3 mb-1 text-gray-800">VIEW PRODUCT LIST</h1><br>
                    </center>

                    <center>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th style="color: white">#</th>
                                        <th style="color: white">Image</th>
                                        <th style="color: white">Category</th>
                                        <th style="color: white">SubCategory</th>
                                        <th style="color: white">Warranty</th>
                                        <th style="color: white">Features</th>
                                        <th style="color: white">Type</th>
                                        <th style="color: white">Brand</th>
                                        <th style="color: white">Model</th>
                                        <th style="color: white">Price</th>
                                        <th style="color: white">Edit</th>
                                        <th style="color: white">Delete</th>
                                    </tr>
                                </thead>

                                <?php
                                $i   = 1;
                                $qry = "select * from products";
                                $run = $db->query($qry);
                                if ($run->num_rows > 0) {
                                    while ($row = $run->fetch_assoc()) {
                                        $id = $row['id'];
                                ?>

                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo '<img src="upload/productsImages/' . $row['img'] . '" width = "70px;" height = "60px;" alt = "Image">' ?>
                                            </td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><?php echo $row['subcategory']; ?></td>
                                            <td><?php echo $row['warranty']; ?></td>
                                            <td>
                                                <textarea disabled style="width: 300px; height: 100px;">
                                                <?php echo $row['features']; ?>
                                            </textarea>
                                            </td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['model']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td>
                                                <a href="editDashboard.php?edit=<?php echo $row['id']; ?>" class="edit_btn"><i class="fas fa-edit" style="color:grey"></i></a>
                                            </td>
                                            <td>
                                                <a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn"><i class="fa fa-trash" style="color:grey"></i></a>
                                            </td>
                                        </tr>

                                        <?php ?>

                                <?php
                                    }
                                }
                                ?>

                            </table>
                        </div>
                    </center>

                    <?php if (isset($_SESSION['message'])) : ?>
                        <div class="msg">
                            <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif ?>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>

</body>

</html>