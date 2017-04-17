<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
    <div class='carousel-outer'>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
                $files = scandir($directoryPath);
                $firstFile = true;
                foreach ($files as $entry) {
                    if (substr($entry, -3) == "jpg" & $entry != "header.jpg") {
                        $altValue = substr($entry, 0, -4);
                        $imagePath = $directoryPath . "/" . $entry;

                        echo '<div class="item'; if ($firstFile) { echo ' active';}
                                echo '"><img src="' . $imagePath . '" class="thumb-preview" alt="' . $altValue . '"/>
                            </div>
                        ';

                        $firstFile = false;
                    }
                }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
          <span class="slider-mover-left no-bg" aria-hidden="true">
             <img src="img/left-chevron.png" alt="left-chevron">
          </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
            <span class="slider-mover-right no-bg" aria-hidden="true">
                <img src="img/right-chevron.png" alt="right-chevron">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators thumbs visible-lg visible-md">
        <?php
            $slideCounter = 0;
            foreach ($files as $entry) {
                if (substr($entry, -3) == "jpg" & $entry != "header.jpg") {
                    $altValue = substr($entry, 0, -4);
                    $imagePath = $directoryPath . "/" . $entry;

                    echo '<li data-target="#carousel-custom" data-slide-to="' . $slideCounter . '" ';  
                    if ($slideCounter == 0) {
                        echo ('class="active"');
                    }
                            
                    echo    '>
                            <img src="' . $imagePath . '" alt="' . $altValue . '"/>
                        </li>
                    ';

                    $slideCounter++;
                }
            }
        ?>

        <!--
        <li data-target="#carousel-custom" data-slide-to="0" class="active">
            <img src="listings/gallery_images/chrysler_300/image_1.jpg" alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="1">
            <img src='http://placehold.it/80x50' alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="2">
            <img src='http://placehold.it/80x50' alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="3">
            <img src='http://placehold.it/80x50' alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="4">
            <img src='http://placehold.it/80x50' alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="5">
            <img src="http://placehold.it/80x50" alt="Chevrolet Impala"/>
        </li>
        <li data-target="#carousel-custom" data-slide-to="6">
            <img src="http://placehold.it/80x50" alt="Chevrolet Impala"/>
        </li>
        -->
    </ol>
</div>