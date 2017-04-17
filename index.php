<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luxury Limousine Sales</title>
    <?php include "php/resource_header.html.php" ?>
</head>
<body>
<?php $activePage = "home"; include "php/main_header.html.php" ?>

<!-- banner start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!--<div class="item active" style="background-color: black;">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <img src="img/logo.png">
                    </div>
                </div>
            </div>-->
            <div class="item item-5 active">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        
                    </div>
                </div>
            </div>
            <div class="item item-1">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1 class="gold-gradient"><span>The</span> WOW <span>Factor</span></h1>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                        <div class="banner-slider-inner-1">
                        <h1 class="gold-gradient"><span>Explore Your </span>Dream</h1>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                     <div class="banner-slider-inner-1">
                        <h1 class="gold-gradient">Elegance, <span>delivered</span></h1>
                    </div>
                </div>
            </div>
            <div class="item item-4">
                <div class="container">
                     <div class="banner-slider-inner-1">
                        <h1 class="gold-gradient">High end luxury <span>at its finest</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="slider-mover-left" aria-hidden="true">
             <img src="img/left-chevron.png" alt="left-chevron">
          </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="img/right-chevron.png" alt="right-chevron">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- banner end-->

<!-- Recent car start-->
<div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <i class="fa fa-car"></i>
                        <h2>Listings</h2>
                        <div class="border"></div>
                        <h4>Browse our cars</h4>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php
                    $files = scandir("listings");

                    foreach ($files as $entry) {
                        if (substr($entry, -4) == "json") {
                            // Found a JSON file
                            $rawJSON = file_get_contents("listings/" . $entry);
                            $decodedJSON = json_decode($rawJSON);

                            $sale = $decodedJSON->sale;
                            $imagePath = "listings/" . substr($entry, 0, -5) . ".jpg";
                            $imageAlt = $decodedJSON->carMakeModel;
                            $carMakeModel = $decodedJSON->carMakeModel;
                            $carPrice = $decodedJSON->carPrice;
                            $carDescription = $decodedJSON->carDescription;

                            include "php/listing_designer.html.php";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Recent car end-->

<?php include "php/main_footer.html.php" ?>

<?php include "php/resource_footer.html.php" ?>

</body>
</html>