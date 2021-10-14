<?php include('./database/connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>BUSINESS MACHINES - AllProducts Page</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="BUSINESS MACHINES - AllProducts Page">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- header -->
        <?php
        include('./inc/header.php');
        ?>
        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content pb-10 mb-3">
                <div class="container">
                    <div class="row gutter-lg main-content-wrap">
                        <aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">All Sub Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li>
                                                <a>Time & Attendance</a>
                                                <ul>
                                                    <li>
                                                        <a>Face Scan</a>
                                                        <ul>
                                                            <li><a href="#">FS602</a></li>
                                                            <li><a href="#">UF100</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Fingerprint</a>
                                                        <ul>
                                                            <li><a href="#">CMI819U</a></li>
                                                            <li><a href="#">CMI300U</a></li>
                                                            <li><a href="#">CMI681S</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Special Projects</a>
                                                <ul>
                                                    <li>
                                                        <a>USB Fingerprint</a>
                                                        <ul>
                                                            <li><a href="#">FS-88H</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Access Control</a>
                                                <ul>
                                                    <li>
                                                        <a>Face Scan</a>
                                                        <ul>
                                                            <li><a href="#">FS602</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Fingerprint</a>
                                                        <ul>
                                                            <li><a href="#">F18</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>RFID</a>
                                                        <ul>
                                                            <li><a href="#">CMG250</a></li>
                                                            <li><a href="#">CMS810</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Access Control Locks & Brackets</a>
                                                <ul>
                                                    <li>
                                                        <a>Electromagnetic Lock & Bracket</a>
                                                        <ul>
                                                            <li><a href="#">600LBS Lock</a></li>
                                                            <li><a href="#">600LBS LZ Bracket</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Electromagnetic Locks & Brackets</a>
                                                        <ul>
                                                            <li><a href="#">SL-167A</a></li>
                                                            <li><a href="#">SL-130B</a></li>
                                                            <li><a href="#">BR-100</a></li>
                                                            <li><a href="#">UB-100</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a>Access Control Accessories</a>
                                                <ul>
                                                    <li>
                                                        <a>Power Supply</a>
                                                        <ul>
                                                            <li><a href="#">902-3C</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Slave Reader</a>
                                                        <ul>
                                                            <li><a href="#">FR1200</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Exit Push Button</a>
                                                        <ul>
                                                            <li><a href="#">SW-80</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Remote Exit Switch</a>
                                                        <ul>
                                                            <li><a href="#">K2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Weigand Controller</a>
                                                        <ul>
                                                            <li><a href="#">Wiegand</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-lg-9 main-content">
                            <div class="shop-banner-default banner mb-1" style="background-image: url('images/shop/banner.jpg'); background-color: #4e6582;">
                                <div class="banner-content">
                                    <h4 class="banner-subtitle font-weight-bold ls-normal text-uppercase text-white">
                                        Riode Shop</h4>
                                    <h1 class="banner-title font-weight-bold text-white">Banner with Sidebar</h1>
                                    <a href="#" class="btn btn-white btn-outline btn-icon-right btn-rounded text-normal">Discover
                                        now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                            </nav>

                            <div class="row cols-2 cols-sm-3 product-wrapper">
                                <?php
                                $qry = "SELECT * FROM products";
                                $data = mysqli_query($db, $qry) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id  = $row['id'];
                                        $category = $row['category'];
                                        $subcategory = $row['subcategory'];
                                        $model = $row['model'];
                                        $price = $row['price'];
                                        $img = $row['img'];
                                ?>
                                        <div class="product-wrap">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="showProduct.php?view=<?php echo $id ?>&category=<?php echo $category ?>">
                                                        <?php echo '<img src="./admin/upload/productsImages/' . $img . '" alt="" width="280" height="315" />' ?>
                                                    </a>
                                                    <!-- <div class="product-action">
                                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                            View</a>
                                                    </div> -->
                                                </figure>
                                                <div class="product-details">
                                                    <div class="product-cat">
                                                        <a href="showProduct.php?view=<?php echo $id ?>&category=<?php echo $category ?>"><?php echo $category ?></a> |
                                                        <a href="showProduct.php?view=<?php echo $id ?>&category=<?php echo $category ?>"><?php echo $subcategory ?></a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a href="showProduct.php?view=<?php echo $id ?>&category=<?php echo $model ?>"><?php echo $model ?></a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">Rs.<?php echo $price ?></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <nav class="toolbox toolbox-pagination">
                                <p class="show-info">Showing 12 of 56 Products</p>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="d-icon-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next<i class="d-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->
        <!-- footer -->
        <?php
        include('./inc/footer.php');
        ?>
    </div>

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sticky/sticky.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>