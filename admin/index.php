<!DOCTYPE html>
<html>

<head>
    <title>BUSINESS MACHINES - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/loginstyle.css">
</head>

<body>
    <?php
if (@$_GET['Empty'] == true) {
    ?>
    <div class="alert" style="align-items:center; padding-top:80px;">
        <div class="alert alert-primary text-center my-3"><?php echo $_GET['Empty'] ?></div>
    </div>
    <?php
}
?>
    <?php
if (@$_GET['Invalid'] == true) {
    ?>
    <div class="alert" style="align-items:center; padding-top:80px;">
        <div class="alert alert-danger text-center my-3"><?php echo $_GET['Invalid'] ?></div>
    </div>
    <?php
}
?>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">

            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../images//logo.png" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <form action="process.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value=""
                                placeholder="Email">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value=""
                                placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center mt-4 login_container">
                            <button name="btnlogin" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>