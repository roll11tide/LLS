<!-- Main header start-->
<div class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo" href="index.php">
                    <img src="img/logo.png" alt="header logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!isset($activePage)) {
                            $activePage="home";
                            }
                    ?>
                    <li><a href="index.php" 
                        <?php
                            if ($activePage == "home") {
                                echo 'class="active"';
                            }
                        ?>
                        >Home</a></li>
                    <li><a href="contact.html.php"
                        <?php
                            if ($activePage == "contact") {
                                echo 'class="active"';
                            }
                        ?>
                        >Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->