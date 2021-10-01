<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>BUSINESS MACHINES - AfterSales Page</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="BUSINESS MACHINES - AfterSales Page">
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

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>

<body class="contact-us">

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
                        <li>After Sales</li>
                    </ul>
                </div>
            </nav>

            <div class="page-content">
                <div class="container">
                    <section class="category-section badge-section mt-10 pt-4 pb-10 mb-10">
                        <div class="row grid gutter-sm">
                            <div class="grid-item col-md-6 height-x2">
                                <div class="category category-badge category-absolute overlay-dark">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="images/categories/category16.jpg" alt="category" width="585" height="397" />
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="grid-item col-md-6 height-x5">
                                <div class="category category-badge category-absolute overlay-dark">
                                    <p style="text-align:justify">At Business Machines, our expertise in office automation has allowed our valued clients to achieve the highest standards of quality and efficiency, even after the sale is complete.</p>
                                    <p style="text-align:justify">We give high priority to customer satisfaction and we believe that what truly counts after the sale is the level of service, which is exactly why we go above and beyond to deliver the best after sales services. We will maintain ongoing relationships with our clients to make sure that they get the most out of their office automation solutions.</p>
                                    <p style="text-align:justify">We provide comprehensive warranty that is provided for all products with a one-for-one replacement facility for selected products. During the course of the warranty period, warranty preventive maintenance servicing is carried out every three months and all servicing and spare parts are provided free of charge, although it is subject to certain conditions and excludes parts of consumable nature.</p>
                                    <p style="text-align:justify">We also provide standard and comprehensive maintenance contract facilities in addition to in-house customer support and a committed IT help desk to manage and respond to all customer inquiries, clarifications and address complaints. Should our customers wish to gain technical assistance on any of our office automation solutions, our well trained technical support is accessible island-wide for your convenience.</p><br/>
                                </div>
                            </div>
                            <p style="text-align:justify">We can also provide the help of technical personnel during weekends, if situations call for such actions and our technical experts are well equipped with replacement spares to carry out emergency repairs at any time as well.</p>
                            <p style="text-align:justify">When necessary, back-up machines will be provided as well and if we repair the machine at our premise, the customer will be given a back-up similar or equivalent to the machine being repaired. This will be valid during the course of the warranty. Once the warranty has reached its date of expiry, our customers can get in touch with us for an Annual Service and Annual Comprehensive Maintenance Contract facility on the basis of an annual premium paid in advance. Such contracts also offer pre scheduled preventive maintenance services and any number of visits at no additional charges. However, relocation of equipment is not covered under such contracts.
                                All of the above described after sales services highlight our commitment to customer satisfaction on a long term basis. We strive to offer our valued customers added value for their money and our comprehensive after sales services and streamlined responses to any inquiries are guaranteed to offer complete peace of mind that top quality service will never be compromised here at Business Machines.</p>
                            <div class="col-1 grid-space"></div>
                        </div>
                    </section>
                </div>
            </div>

        </main>
        <!-- footer -->
        <?php
        include('./inc/footer.php');
        ?>
    </div>
   
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>

    <!-- Main JS File -->
    <script src="js/main.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
        /*
        Map Settings

            Find the Latitude and Longitude of your address:
                - https://www.latlong.net/
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        */

        // Map Markers
        var mapMarkers = [{
            address: "New York, NY 10017",
            html: "<strong>New York Office<\/strong><br>New York, NY 10017",
            popup: true
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: !window.Riode.isMobile,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 11
        };

        var map = $('#googlemaps').gMap(mapSettings);

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }
    </script>
</body>

</html>