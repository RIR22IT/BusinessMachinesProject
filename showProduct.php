<?php include './database/connection.php'; ?>

<?php
if (isset($_GET['view'])) {
    $id     = $_GET['view'];
    $update = true;
    $qry    = "select * from products where id = $id";
    $run    = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            $id           = $row['id'];
            $category     = $row['category'];
            $subcategory  = $row['subcategory'];
            $warranty     = $row['warranty'];
            $features     = $row['features'];
            $img      = $row['img'];
            $type         = $row['type'];
            $brand = $row['brand'];
            $model        = $row['model'];
            $price        = $row['price'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="SW-THEMES">

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
    <link rel="stylesheet" type="text/css" href="vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- header -->
        <?php
        include('./inc/header.php');
        ?>

        <main class="main mt-6 single-product">
            <div class="page-content mb-10 pb-6">
                <div class="container">
                    <div class="product product-single row mb-8">
                        <div class="col-md-6 sticky-sidebar-wrapper">
                            <div class="col-md-12 pl-md-6 pt-4 pt-md-0">
                                <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
                                    <figure class="p-relative d-inline-block mb-2">
                                        <?php echo '<img src="admin/upload/productsImages/' . $img . '" data-zoom-image="admin/upload/productsImages/' . $img . '" width="800" height="1000"' . $img . '" alt = "Image">' ?>
                                    </figure>

                                </div>
                                <div class="product-thumbs-wrap">
                                    <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                                    <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-details">
                                <div class="product-navigation">
                                    <ul class="breadcrumb breadcrumb-lg">
                                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                                        <li><a href="#" class="active">Products</a></li>
                                        <li>Detail</li>
                                    </ul>
                                </div>

                                <h1 class="product-name"><?php echo $subcategory; ?></h1>
                                <div class="product-meta">
                                    TYPE:<span class="product-sku"><?php echo $type; ?></span>
                                    BRAND:<span class="product-brand"><?php echo $brand; ?></span>
                                    WARRANTY:<span class="product-brand"><?php echo $warranty; ?></span>
                                    MODEL:<span class="product-brand"><?php echo $model; ?></span>
                                </div>
                                <div class="product-price">Rs. <?php echo $price; ?></div><br/>
                                <hr class="product-divider">

                                <div class="product-form product-qty">
                                    <div class="product-form-group">
                                        <div class="input-group mr-2">
                                            <button class="quantity-minus d-icon-minus"></button>
                                            <input class="quantity form-control" type="number" min="1" max="1000000">
                                            <button class="quantity-plus d-icon-plus"></button>
                                        </div>
                                        <button class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold">GET QUOTE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab tab-nav-simple product-tabs">

                        <div class="tab-content">
                            <div class="tab-pane active in" id="product-tab-description">
                                <div class="row mt-6">
                                    <div class="col-md-12">
                                        <h2><b>Description</b></h2>
                                        <p class="mb-2" style="text-align:justify">
                                        <?php echo $features; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="pt-3 mt-10">
                        <h2 class="title justify-content-center">Related Products</h2>

                        <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4" data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
                            <?php
                            $qry = "SELECT * FROM products WHERE subcategory = '$subcategory' and id != '$id' order by id limit 4";
                            $data = mysqli_query($db, $qry) or die('error');

                            if (mysqli_num_rows($data) > 0) {
                                while ($row = mysqli_fetch_assoc($data)) {
                                    $r_id  = $row['id'];
                                    $r_category = $row['category'];
                                    $r_subcategory = $row['subcategory'];
                                    $r_model = $row['model'];
                                    $r_price = $row['price'];
                                    $r_img = $row['img'];
                            ?>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="showProduct.php?view=<?php echo $r_id ?>&category=<?php echo $r_category ?>">
                                                <?php echo '<img src="./admin/upload/productsImages/' . $r_img . '" alt="" width="280" height="315" />' ?>
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="showProduct.php?view=<?php echo $r_id ?>&category=<?php echo $r_category ?>"><?php echo $r_category ?></a> |
                                                <a href="showProduct.php?view=<?php echo $r_id ?>&category=<?php echo $r_category ?>"><?php echo $r_subcategory ?></a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="showProduct.php?view=<?php echo $r_id ?>&category=<?php echo $r_model ?>"><?php echo $r_model ?></a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">Rs. <?php echo $r_price ?></span>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <!-- End Main -->
        <?php
        include('./inc/footer.php');
        ?>
        <!-- End Footer -->
    </div>

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/sticky/sticky.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>

    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>