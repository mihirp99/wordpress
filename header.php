<?php 


/* HEADER */

?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&family=Poppins&display=swap" rel="stylesheet">
    
    <!-- font_awesome -->
    <script src="https://kit.fontawesome.com/be75fb16f3.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>

<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="top-info">
                        <div class="top-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/location.jpg" alt="">
                        </div>
                        <div class="top-text">
                            <h2>House Building</h2>
                            <p> Mirpur 02 , Dhaka 1210 </p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="top-info">
                        <div class="top-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/email.jpg" alt="">
                        </div>
                        <div class="top-text">
                            <h2>dryerco@mail.com</h2>
                            <p> 004 384 3607 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="btn order-now">Order Now</a>
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample09">
                        <ul class="navbar-nav mr-auto main-menu">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <div class="search-icon">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/search.jpg" alt=""></a>
                        </div>
                    </div>
                </nav>



            </div>
        </div>
    </header>