<?php
// Sets default values so the script doesn't implode if it runs with no given variables
if(!isset($sale)) {
	$sale = false;
}

if(!isset($imagePath)) {
	$imagePath = "http://placehold.it/328x235";
}

if(!isset($imageAlt)) {
	$imagePath = "placeholder_alt";
}

if (!isset($carMakeModel)) {
	$carMakeModel = "placeholder_make_model";
}

if (!isset($carPrice)) {
	$carPrice = "placeholder_price";
}

if (!isset($carDescription)) {
	$carDescription = "Placeholder description.";
}
?>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="thumbnail car-box">
        <?php
        	if ($sale) {
        		echo '
        			<a href="#" class="sale">
                        <span>Sale</span>
                    </a>
        		';
        	}
        ?>
        <a href=<?php echo ("car_gallery.html.php?listing_name=" . substr(substr($imagePath, 0, -4), 9)); ?>><img src=<?php echo '"' . $imagePath . '"'; ?> alt=<?php echo '"' . $imageAlt . '"'; ?>></a>
        <div class="caption car-content">
            <div class="header b-items-cars-one-info-header s-lineDownLeft">
                <h3>
                    <a href=<?php echo ("car_gallery.html.php?listing_name=" . substr(substr($imagePath, 0, -4), 9)); ?>><?php echo $carMakeModel?></a>
                    <span><?php echo $carPrice ?></span>
                </h3>
            </div>

            <p><?php echo $carDescription ?></p>
            <a href=<?php echo ("car_gallery.html.php?listing_name=" . substr(substr($imagePath, 0, -4), 9)); ?> class="btn details-button">Preview</a>
        </div>
    </div>
</div>