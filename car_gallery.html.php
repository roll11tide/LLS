<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Redirect if there is an unspecified or invalid listing
        $files = scandir("listings");
        $listings = array();
        foreach ($files as $entry) {
            if (substr($entry, -4) == "json") {
                array_push($listings, substr($entry, 0, -5));
            }
        }

        if (!isset($_REQUEST['listing_name']) || !in_array($_REQUEST['listing_name'], $listings)) {
            header('Location: 404.html.php');
        }

        $rawJSON = file_get_contents("listings/" . $_REQUEST['listing_name'] . ".json");
        $decodedJSON = json_decode($rawJSON);

        $sale = $decodedJSON->sale;
        $carMakeModel = $decodedJSON->carMakeModel;
        $carPrice = $decodedJSON->carPrice;
        $carDescription = $decodedJSON->carDescription;
    ?>

    <title><?php echo ($carMakeModel); ?></title>

    <?php include "php/resource_header.html.php" ?>
</head>
<body>

<?php $activePage = "car_details"; include "php/main_header.html.php"; ?>

<!-- Page banner start-->
<div class="page-banner"<?php echo 'style="background-image: url(listings/gallery_images/' . $_REQUEST['listing_name'] . '/header.jpg)"'; ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2><?php echo ($carMakeModel); ?></h2>
                    <div class="line-dec"></div>
                    <h3><?php echo ($carPrice); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Car details start-->
<div class="car-details content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-heading">
                                <i class="fa fa-car"></i>
                                <h2><?php echo ($carMakeModel); ?></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                            <div class="car-details-header-price">
                                <h3><?php echo ($carPrice); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                -->

                <div class="clearfix"></div>

                <!-- Car detail slider start-->
                <div class="car-detail-slider">
                    <?php
                        $directoryPath = "listings/gallery_images/" . $_REQUEST['listing_name'];
                        if (!file_exists($directoryPath) || count(glob($directoryPath . "/*")) === 0) {
                            // Directory either doesn't exist or is emtpy
                            include "php/gallery_missing_car.html.php";
                        } else {
                            include "php/gallery_designer.html.php";
                        }
                    ?>
                </div>
                <!-- Car detail slider End-->
            </div>
        </div>

        <!-- Car Details Start -->
        <div class="car-detail-block mrg-b-30">
            <div class="section-heading">
                <i class="fa fa-search-plus"></i>
                <h2>Car Specifications</h2>
                <div class="border"></div>
                <h4>Details</h4>
            </div>
            <!-- <h2 class="title">Details</h2> -->
            <ul class="car-detail-info-list">
                <li>
                    <span></span>
                </li>
                <li>
                    <span></span>
                </li>
                <li>
                    <span></span>
                </li>
                <li>
                    <span></span>
                </li>
                <li>
                    <span></span>
                </li>
                <li>
                    <span></span>
                </li>
            </ul>
        </div>
        <!-- Car Details End -->
    </div>
</div>

<?php include "php/main_footer.html.php" ?>

<?php include "php/resource_footer.html.php" ?>

</body>
</html>