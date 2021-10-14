<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
?>

<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM products WHERE id=$id");
    if ($record->num_rows > 0) {
        while ($n = $record->fetch_assoc()) {
            $id = $n['id'];
            $img = $n['img'];
            $category = $n['category'];
            $subcategory = $n['subcategory'];
            $warranty = $n['warranty'];
            $features = $n['features'];
            $type = $n['type'];
            $brand = $n['brand'];
            $model = $n['model'];
            $price = $n['price'];
        }
    }
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

    <title>BUSINESS MACHINES -Admin Panel</title>

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
                        <h1 class="h3 mb-1 text-gray-800">UPDATE PRODUCTS</h1>
                    </center>

                    <form method="post" action="viewDashboard.php" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-offset-1 col-md-12" style="bottom: -18px;">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="col-15">

                                    <center>
                                        <div id="preview"></div><br />
                                    </center>
                                    <label for="img">Product Image</label>
                                    <input type="file" class="form-control" id="img" name="img" onchange="getImagePreview(event)"><br />

                                    <select class="form-control" id="category" name="category" style="height: 50px;" required>
                                        <option selected disabled="disabled">Select Category</option>
                                        <option value="Biometric Devices" <?php
                                                                            if ($category == 'Biometric Devices') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Biometric Devices</option>
                                        <option value="Video Conferencing" <?php
                                                                            if ($category == 'Video Conferencing') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Video Conferencing</option>
                                        <option value="Bank Equipment" <?php
                                                                        if ($category == 'Bank Equipment') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Bank Equipment</option>
                                        <option value="Office Equipment" <?php
                                                                            if ($category == 'Office Equipment') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Office Equipment</option>
                                        <option value="Health & Wellbeing" <?php
                                                                            if ($category == 'Health & Wellbeing') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Health & Wellbeing</option>
                                        <option value="Retail" <?php
                                                                if ($category == 'Retail') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Retail</option>
                                        <option value="Security" <?php
                                                                    if ($category == 'Security') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Security</option>
                                        <option value="Software" <?php
                                                                    if ($category == 'Software') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Software</option>
                                    </select>
                                </div><br>

                                <div class="col-15">
                                    <select class="form-control" id="subcategory" name="subcategory" style="height: 50px;" required>
                                        <option selected disabled="disabled">Select SubCategory</option>
                                        <option value="Time & Attendance" <?php
                                                                            if ($subcategory == 'Time & Attendance') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Time & Attendance</option>
                                        <option value="Access Control" <?php
                                                                        if ($subcategory == 'Access Control') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Access Control</option>
                                        <option value="Access Control Locks & Brackets" <?php
                                                                                        if ($subcategory == 'Access Control Locks & Brackets') {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>Access Control Locks & Brackets</option>
                                        <option value="Access Control Accessories" <?php
                                                                                    if ($subcategory == 'Access Control Accessories') {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>Access Control Accessories</option>
                                        <option value="USB Video Conferencing" <?php
                                                                                if ($subcategory == 'USB Video Conferencing') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>USB Video Conferencing</option>
                                        <option value="Video Conferencing Accessories" <?php
                                                                                        if ($subcategory == 'Video Conferencing Accessories') {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>Video Conferencing Accessories</option>
                                        <option value="Display" <?php
                                                                if ($subcategory == 'Display') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Display</option>
                                        <option value="Single Pocket Currency Counter" <?php
                                                                                        if ($subcategory == 'Single Pocket Currency Counter') {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>Single Pocket Currency Counter</option>
                                        <option value="Double Pocket Currency Counter" <?php
                                                                                        if ($subcategory == 'Double Pocket Currency Counter') {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>>Double Pocket Currency Counter</option>
                                        <option value="Printer" <?php
                                                                if ($subcategory == 'Printer') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Printer</option>
                                        <option value="Paper Shredders" <?php
                                                                        if ($subcategory == 'Paper Shredders') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Paper Shredders</option>
                                        <option value="Postal Franking Machines" <?php
                                                                                    if ($subcategory == 'Postal Franking Machines') {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>Postal Franking Machines</option>
                                        <option value="Postal Franking Machines Supplies" <?php
                                                                                            if ($subcategory == 'Postal Franking Machines Supplies') {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>>Postal Franking Machines Supplies</option>
                                        <option value="Air Purifiers" <?php
                                                                        if ($subcategory == 'Air Purifiers') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Air Purifiers</option>
                                        <option value="HEPA Filters" <?php
                                                                        if ($subcategory == 'HEPA Filters') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>HEPA Filters</option>
                                        <option value="Carbon Filters" <?php
                                                                        if ($subcategory == 'Carbon Filters') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Carbon Filters</option>
                                        <option value="Hybrid Filters" <?php
                                                                        if ($subcategory == 'Hybrid Filters') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Hybrid Filters</option>
                                    </select>
                                </div><br>

                                <div class="col-15">
                                    <label>Warranty*</label>
                                    <input type="text" name="warranty" class="form-control" value="<?php echo $warranty; ?>" required>
                                </div><br>

                            </div>

                            <div class="col-md-offset-1 col-md-6"><br>

                                <div class="col-15">
                                    <label>Type*</label>
                                    <input type="text" name="type" class="form-control" value="<?php echo $type; ?>" required>
                                </div><br>

                                <div class="col-15">
                                    <label>Brand*</label>
                                    <input type="text" class="form-control" name="brand" value="<?php echo $brand; ?>" required>
                                </div><br>
                            </div>

                            <div class="col-md-offset-1 col-md-6" style="bottom: -22px;">

                                <div class="col-15">
                                    <label>Product Models*</label>
                                    <input type="text" name="model" class="form-control" value="<?php echo $model; ?>" required>
                                </div><br>

                                <div class="col-15">
                                    <label>Price*</label>
                                    <input type="number" name="price" class="form-control" value="<?php echo $price; ?>" required>
                                </div><br>
                            </div>

                            <div class="col-15">
                                <label>Features*</label>
                                <textarea id="features" name="features" required><?php echo $features; ?>
                                </textarea><br><br>
                            </div><br><br>

                            <?php if ($update == true) : ?>
                                <button class="btn btn-primary" type="submit" name="update">update</button>
                            <?php else : ?>
                                <button class="btn" type="submit" name="save">Update</button>
                            <?php endif ?>

                    </form>

                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                            echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
                            unset($_SESSION['success']);
                        }

                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                            echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['status'] . '</h2>';
                            unset($_SESSION['status']);
                        }

                        ?>
                    </div>

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

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script type="text/javascript">
            function getImagePreview(event) {
                var image = URL.createObjectURL(event.target.files[0]);
                var imagediv = document.getElementById('preview');
                var newimg = document.createElement('img');
                imagediv.innerHTML = '';
                newimg.src = image;
                newimg.width = "300";
                imagediv.appendChild(newimg);
            }
        </script>

        <!-- CK EDITOR -->
        <script src="../ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('features')
        </script>

</body>

</html>