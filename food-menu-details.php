<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shalimar | Détails du Menu</title>
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
                        <h2>Détails du Menu</h2>
                        <ul>
                            <li><a href="index.php">Accueil -</a> /</li>
                            <li>Les Menus</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Single Menu Area Start Here -->
            <div class="single-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="single-menu-inner">
                               <div class="single-menu-inner-tab">
                                    <ul class="single-menu-nav">
                                        <li class="active"><a href="food-menu-details.php#single-menu1" data-toggle="tab"><img src="img/dish/single-menu-tab1.jpg" class="img-responsive" alt="single recipe"></a></li>
                                        <li><a href="food-menu-details.php#single-menu2" data-toggle="tab"><img src="img/dish/single-menu-tab2.jpg" class="img-responsive" alt="Menu Details"></a></li>
                                        <li><a href="food-menu-details.php#single-menu3" data-toggle="tab"><img src="img/dish/single-menu-tab3.jpg" class="img-responsive" alt="Menu Details"></a></li>
                                        <li><a href="food-menu-details.php#single-menu4" data-toggle="tab"><img src="img/dish/single-menu-tab4.jpg" class="img-responsive" alt="Menu Details"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="single-menu1">
                                            <img src="img/dish/single-menu1.jpg" class="img-responsive" alt="Menu Details">
                                        </div>
                                        <div class="tab-pane" id="single-menu2">
                                            <img src="img/dish/single-menu2.jpg" class="img-responsive" alt="Menu Details">
                                        </div>
                                        <div class="tab-pane" id="single-menu3">
                                            <img src="img/dish/single-menu3.jpg" class="img-responsive" alt="Menu Details">
                                        </div>
                                         <div class="tab-pane" id="single-menu4">
                                            <img src="img/dish/single-menu4.jpg" class="img-responsive" alt="Menu Details">
                                        </div>
                                    </div>
                                </div>                              
                                <?php 
                                $id = $_GET['id'];
                      			 $query = mysql_query("SELECT * FROM  sha_products AS pro INNER JOIN sha_product_images AS img ON pro.product_id = img.product_mapping_id where pro.product_id = $id group by pro.product_id");
								while($row=mysql_fetch_array($query)) {
								?>
                                <div class="single-menu-inner-content">
                                    <h2 class="inner-sub-title"><?php echo $row['product_title']; ?></h2>
                                    <ul class="rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>                                  
                                    <span class="price"><?php echo $row['product_price']; ?>€</span>
                                    <p>Plutôt que de masquer l'alimentation dans les garnitures et sauces lourdes, parfois associées à cette cuisine, l'intensité de la saveur douce, ce qui permet de rester plus légers et des repas sains de textures légères</p>                                   
                                </div>
                                <?php
                                }
								?>
                                <!-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="ingredients-box">
                                            <h3>Ingredients</h3>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>60 ml extra virgin olive oil</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>230 g bacon, diced into 1/4 -inch pieces</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>120 ml dry white wine</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>3 large eggs</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>180 ml grated parmesan cheese</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>1 Spoon Salt</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="ingredients-box">
                                            <h3>Nutritions</h3>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Protine:  6.60g</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Deitary Fiber: 50g</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Fat Total: 60g</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Energy: 900mg</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Deitary Fiber: 50g</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i>Fat Total: 60g</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="related-products">
                                    <h2 class="inner-sub-title title-bar-big-left-close">You May Like</h2>
                                    <div class="rc-carousel"
                                        data-loop="true"
                                        data-items="3"
                                        data-margin="30"
                                        data-autoplay="true"
                                        data-autoplay-timeout="5000"
                                        data-smart-speed="2000"
                                        data-dots="false"
                                        data-nav="true"
                                        data-nav-speed="false"
                                        data-r-x-small="1"
                                        data-r-x-small-nav="false"
                                        data-r-x-small-dots="true"
                                        data-r-x-medium="2"
                                        data-r-x-medium-nav="false"
                                        data-r-x-medium-dots="true"
                                        data-r-small="2"
                                        data-r-small-nav="true"
                                        data-r-small-dots="false"
                                        data-r-medium="3"
                                        data-r-medium-nav="true"
                                        data-r-medium-dots="false">
                                        <div class="food-menu2-box">
                                            <div class="food-menu2-img-holder">
                                                <div class="food-menu2-more-holder">
                                                    <ul>
                                                        <li><a href="indian_spcl.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <a href="indian_spcl.php"><img class="img-responsive" src="img/recipe/indian/sandwich-indian.jpg" alt="dish"></a>
                                            </div>
                                             <div class="food-menu2-title-holder">
                                                <span>5.00€</span>
                                                <h3><a href="indian_spcl.php">Sandwich</a></h3>
                                            </div>
                                        </div>
                                         <div class="food-menu2-box">
                                            <div class="food-menu2-img-holder">
                                                <div class="food-menu2-more-holder">
                                                    <ul>
                                                        <li><a href="seafood.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <a href="seafood.php"><img class="img-responsive" src="img/recipe/seafoods/shalimar3.jpg" alt="dish"></a>
                                            </div>
                                             <div class="food-menu2-title-holder">
                                                <span>11.00€</span>
                                                <h3><a href="seafood.php">Poisson Shalimar</a></h3>
                                            </div>
                                        </div>
                                         <div class="food-menu2-box">
                                            <div class="food-menu2-img-holder">
                                                <div class="food-menu2-more-holder">
                                                    <ul>
                                                        <li><a href="lamb.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <a href="lamb.php"><img class="img-responsive" src="img/recipe/lamb/lamb1.jpg" alt="dish"></a>
                                            </div>
                                             <div class="food-menu2-title-holder">
                                                <span>11.00€</span>
                                                <h3><a href="lamb.php">Agneau Madras</a></h3>
                                            </div>
                                        </div>
                                         <div class="food-menu2-box">
                                            <div class="food-menu2-img-holder">
                                                <div class="food-menu2-more-holder">
                                                    <ul>
                                                        <li><a href="chicken.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <a href="chicken.php"><img class="img-responsive" src="img/recipe/chicken/chicken ginger.jpg" alt="dish"></a>
                                            </div>
                                             <div class="food-menu2-title-holder">
                                                <span>9.00€</span>
                                                <h3><a href="chicken.php">Poulet Ginger</a></h3>
                                            </div>
                                        </div>
                                         <div class="food-menu2-box">
                                            <div class="food-menu2-img-holder">
                                                <div class="food-menu2-more-holder">
                                                    <ul>
                                                        <li><a href="starters.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <a href="starters.php"><img class="img-responsive" src="img/recipe/starter/praja-18.jpg" alt="dish"></a>
                                            </div>
                                             <div class="food-menu2-title-holder">
                                                <span>10.00€</span>
                                                <h3><a href="starters.php">Prajapati (Nouveau)</a></h3>
                                            </div>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="rc-sidebar">
                                <!-- <div class="sidebar-search-area margin-bottom-sidebar">
                                    <h2 class="title-sidebar title-bar-sidebar">Search</h2>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control" placeholder="Search Here . . .">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>  
                                        </span>
                                    </div>
                                </div> -->
                                <!-- <div class="categories margin-bottom-sidebar">
                                    <h2 class="title-sidebar title-bar-sidebar">Food Categories</h2>
                                    <ul>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Design</a></li>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Recipes</a></li>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Dessert</a></li>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Food</a></li>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Drinks</a></li>
                                        <li><a href="food-menu-details.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Cafe</a></li>
                                    </ul>
                                </div>    -->                           
                                <div class="product-tags">
                                    <h2 class="title-sidebar title-bar-sidebar">Tags</h2>
                                    <ul>
                                    	 <li><a href="maison.php">Pains Maison</a></li> 
                                        <li><a href="starters.php">Entrée-Starters</a></li>
                                                                             
                                        <li><a href="vegetables.php">Légumes-Vegetables</a></li>
                                        <li><a href="rice.php">Riz-Rice</a></li>
                                        <li><a href="biryani.php">Biryanis</a></li>
                                        <li><a href="desserts.php">Desserts</a></li>
                                        <li><a href="beef.php">Boeuf-Beef</a></li>
                                        <li><a href="seafood.php">Poissons & Crevettes Seafood</a></li>
                                        <li><a href="lamb.php">Plats- Main Courses Ageneau-Lamb</a></li>                                 
                       			 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Menu Area End Here -->
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
