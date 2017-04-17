<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <?php include "php/resource_header.html.php" ?>
</head>
<body>
<?php $activePage = "contact"; include "php/main_header.html.php"; ?>

<!-- Page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Contact Us</h2>
                    <div class="line-dec"></div>
                    <h5>Don't hesitate to get in touch with us!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Contact us body start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <h2 class="title no-top-margin">Contact Form</h2>
                <div class="contact-form">
                    <form id="contact_form" action="mail.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group full-name">
                                    <input type="text" class="input-text" name="name" id="name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group email address">
                                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group Phone Number"> 
                                    <input type="text" class="input-text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group your website">
                                    <input type="text" class="input-text" name="company" id="company" placeholder="Your Company">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea id="message" class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mrg-btnn">
                                <input type="submit" name="sent message" class=" btn btn-message" value="send message">
                            </div>
                        </div>
                    </form>     
                </div>
            </div>

            <div class="col-lg-4 col-md-4  col-xs-12">
                <!-- contact details start-->
                <div class="contact-details">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>Address</h5>
                            <p>5405 Alton Parkway<br>Irvine, CA 92604</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone</h5>
                            <p><span>Andy Torres:</span> <a href="tel:+880-825-585-5656"> (949)-212-3997</a></p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email</h5>
                            <p>
                               <span>Sales:</span><a href="mailto:sales@carhouse.com"> andy@luxurylimousinesales.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- contact details end-->
            </div>
        </div>
    </div>
</div>
<!-- Contact us body end-->

<?php include "php/main_footer.html.php" ?>

<?php include "php/resource_footer.html.php" ?>

</body>
</html>