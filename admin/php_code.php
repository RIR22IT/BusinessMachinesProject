<?php include('../database/connection.php');

//initialize variables
$category = "";
$subcategory = "";
$warranty = "";
$features     = "";
$subcategory = "";
$img = [];
$type     = "";
$brand = "";
$model     = "";
$price     = "";

//insert products
if (isset($_POST['save'])) {
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $warranty = $_POST['warranty'];
    $features = $_POST['features'];
    $img = $_FILES['img']['name'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    if (file_exists("upload/productsImages" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/productsImages/" . $newfilename);
        $qry = "INSERT INTO products (category, subcategory, warranty, features, img, type, brand, model, price) VALUES ('$category', '$subcategory', '$warranty', '$features', '$newfilename', '$type', '$brand', '$model', '$price')";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Products Added successfully";
    }
}

//update products
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $warranty = $_POST['warranty'];
    $features = $_POST['features'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    if (file_exists("upload/productsImages/" . $_FILES["img"]["name"])) {
        $qry = "UPDATE products SET category = '$category', subcategory = '$subcategory', warranty = '$warranty', features = '$features', type = '$type', brand = '$brand', model = '$model', price = '$price' WHERE id=$id";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: viewDashboard.php?success");
        } else {
            header("location: viewDashboard.php?fail");
        }
    } else {

        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/productsImages/" . $newfilename);
        $qry = "UPDATE products SET category = '$category', subcategory = '$subcategory', img = '$newfilename', warranty = '$warranty', features = '$features', type = '$type', brand = '$brand', model = '$model', price = '$price' WHERE id=$id";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: viewDashboard.php?success");
        } else {
            header("location: viewDashboard.php?fail");
        }
    }
}

//delete products
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM products WHERE id=$id");
    $_SESSION['message'] = "Products Deleted successfully!";
    header('location: viewDashboard.php');
}
