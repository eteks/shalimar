<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shalimar | Desserts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="css/font2/flaticon.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/switch-style.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="wrapper">
            <!-- Header Area Start Here -->
            	<?php include('include/header.php'); ?>	
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2>Desserts</h2>
                        <ul>
                            <li><a href="index.php">Accueil -</a> /</li>
                            <li>Le Menu</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Food Menu 1 Area Start Here -->
            <div class="food-menu1-area">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="food-menu1-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="food-menu-title">
                                    <h3>Desserts Menu</h3>
                                    <span><i class="flaticon-technology"></i></span>
                                </div>
                                <ul>
                                    
                                     <?php
                      					 $query = mysql_query("SELECT * FROM  sha_products AS pro INNER JOIN sha_product_images AS img ON pro.product_id = img.product_mapping_id where prodcut_category_id=11 group by pro.product_id");
										while($row=mysql_fetch_array($query)) {
									?>
                                    <li>
                                        <div class="media">
                                            <a href="food-menu-details.php?id=<?php echo $row['product_id']; ?>" class="pull-left">
                                                <img src="<?php echo $row['product_image_path']; ?>" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="food-menu-details.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['product_title']; ?></a></h4>
                                                 
                                                <span><?php echo $row['product_price']; ?>€</span>
                                            </div>
                                        </div>
                                    </li>
                           		<?php
                   					 }
								?>                                
                                </ul>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Food Menu 1 Area End Here -->
            <!-- Footer Area Start Here -->
          		
				<?php include('include/footer.php'); ?>
            <!-- Footer Area End Here -->
        </div>
       
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery-->  
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js/plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js/wow.min.js"></script>

        <!-- Nivo slider js -->     
        <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="vendor/slider/home.js" type="text/javascript"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>

        <!-- Switch js -->
        <script src="js/switch-style.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>
