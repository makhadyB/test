<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>LE DIAWANDOU</title>

   
    <link rel="icon" href="img/core-img/favicon.ico">

   
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <?php
        include("/xampp/htdocs/SOLUTION_B/client/header.php");
        ?>

        
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#product_details_slider" data-slide-to="0" style="background-image: url(img/bg-img/armoire.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/bg-img/chambre1);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/bg-img/coussin.jpeg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/bg-img/lampe.jpeg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="4" style="background-image: url(img/bg-img/moquette1.jpeg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="5" style="background-image: url(img/bg-img/peps.webp);">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="img/bg-img/armoire.jpg">
                                            <img class="d-block w-100" src="img/bg-img/chambre1.jpg" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/peps.webp">
                                            <img class="d-block w-100" src="img/bg-img/moquette1.jpeg" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/tableamanger.jpeg">
                                            <img class="d-block w-100" src="img/bg-img/vase.jpeg" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/coussin.jpeg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt="Fourth slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/meuble vert.jpeg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt="fifth slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/lampe.jpeg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt=" sixthslide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/bg-img/vase.jpeg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt="seventhslide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                           
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <a href="product-details.php">
                                    <h6>deco made in senegal</h6>
                                </a>
                                

                            </div>
                           

                        </div>

                        <div class="short_overview my-5">
                            <p>De tres beaux meubles pour votre decoration d'interieur a des prix imbattables</p>
                        </div>
                        <div class="short_overview my-5">
                            <p>interessé(e) appelez au +221 775869422</p>
                        </div>
                        
                        <form class="cart clearfix" method="post">
                            <div class="cart-btn d-flex mb-50">


                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
   




    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</php>