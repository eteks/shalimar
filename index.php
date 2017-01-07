<?php
		
		if(isset($_POST['contact_submit'])) {
		$name = trim($_POST['name']);		
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		$date = trim($_POST['date']);
		$time = trim($_POST['time']);
		$tele = trim($_POST['phone']);
		$subject = "Formulaire de Reservation";
		$emailTo = 'dspmuthukaruppan@gmail.com'; //Put your own email address here
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;	  
	  	$headers .= "MIME-Version: 1.0\r\n";
	  	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$body = "<html lang='fr'>
		<body bgcolor='#ffffff'>
		<div style='margin: 0px auto; width: 100%;'>
		<center>
		<img style='margin-right: 10px' width='110' height='110' src='data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QNpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InV1aWQ6NTgxMDQ0QzAyNDFEREUxMTg5QjBCNzdCNDlBODFGMkMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUQ1RDIyRUEzMUMxMTFFNDlFQ0ZCNjJCMUQwODdFMjIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUQ1RDIyRTkzMUMxMTFFNDlFQ0ZCNjJCMUQwODdFMjIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCQjQ4QkRFODAxMkFFNDExOTE4OEVDQjQ5NjBGNTM5RiIgc3RSZWY6ZG9jdW1lbnRJRD0idXVpZDo1ODEwNDRDMDI0MURERTExODlCMEI3N0I0OUE4MUYyQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0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' />
		</center></div>
		<h4 style='margin: 0px; width:100% ;text-align: center; color:#a01116; padding:7px'>
		Nous Creons, Fabriquons et Servons Fresho
		</h4>
		
		<div style='clear: both'></div>
		<div style='margin: 0px auto; width: 100%;'>
		<h2 style='background: #a01116; text-align: left; color: #fff; font-weight: bold; font-size: 16px; padding: 10px 10px; margin-bottom: 0;'>
		 Bienvenue à shalimar !
		 </h2>
		 <div style='border: 1px solid #a01116; background: #fff; '>
		 <h2 style='font-size: 26px; color: #a01116; margin-top: 23px; text-align: center;'>
		 Formulaire de Reservation</h2>
		 <center>		 
			<table style='padding: 5px; color:#a01116; text-align:center;margin:30px 20px;'>
			<tr ><td style='text-align:left;'>Prenom</td><td style='padding: 0 60px 0;'></td>:<td style='text-align:left;'> $name </td></tr>
			<tr><td style='text-align:left;'>Email</td><td style='padding: 0 60px 0;'></td>:<td style='text-align:left;'>$email</td></tr>
			<tr><td style='text-align:left;'>Telephone</td><td style='padding:0 60px 0;'></td>:<td style='text-align:left;'>$tele</td></tr>
			<tr><td style='text-align:left;'>Date</td><td></td style='padding: 0 60px 0;'>:<td style='text-align:left;'>$date</td></tr>
			<tr><td style='text-align:left;'>Temps</td><td></td style='padding: 0 60px 0;'>:<td style='text-align:left;'>$time</td></tr>
			<tr><td style='text-align:left;'>Message</td><td></td style='padding: 0 60px 0;'>:<td style='text-align:left;'>$message</td></tr>					 							
		</table>
		</br>
		</center>
		 </div>
		 </div>				 
		<h4 style='color: #a01116; margin-top: 23px;text-align:right; padding:5px;'>
		 	 13 Place du Petit Martroy, 95300 Pontoise, France <br><span style='font-size: 12px; color: #a01116; padding:5px;'>
		 	 + 33 0 1 30 32 71 76 / + 33 0 9 53 54 11 54</span></h4>		 	 
		 </body>
		 </html>";
		//echo $body;
		
		mail($emailTo, $subject, $body, $headers);
		
		}
		?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shalimar | Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href=""> -->

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="css/font/flaticon.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">

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
            <header>                
                <div class="header3-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="middle-logo pull-left">
                                        <a href="index.php"><img class="img-responsive" src="img/logo/home_logo.png" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!-- <ul class="header-cart-area">
                                        <li class="header-search3">
                                        	
                                            <form>
                                               <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="food-menu2.html#">www.restaurantshalimar.fr</a></li> 
                                            </form>
                                        </li>                                         
                                    </ul> -->
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="header-top-left pull-right">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+33 (0)1 30 32 71 76	"> +33 (0)1 30 32 71 76  /  +33 (0)9 53 54 11 54</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                            <div class="main-menu-area">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="index.php">Accueil</a>
                                            <!-- <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                            </ul>  -->  
                                        </li>
                                        <li><a href="about.php">Actualités</a>
                                            <ul>
                                                <!-- <li><a href="about1.html">About 1</a></li> -->
                                                <!-- <li><a href="about.php">About 1</a></li> -->
                                            </ul>   
                                        </li>
                                        <li><a href="index.php">Les Menus</a>
                                            <ul class="mega-menu-area">
                                                <li>
                                                    <a href="starters.php">Entrée-Starters</a>
                                                    <a href="maison.php">Pains Maison</a>
                                                    <a href="beef.php">Boeuf-Beef</a>
                                                    <a href="vegetables.php">Légumes-Vegetables</a>                                                  
                                                    
                                                </li>
                                                <li>
                                                	<a href="chicken.php">Poulet Chicken</a>
                                                	<a href="rice.php">Riz-Rice</a>
                                                	<a href="biryani.php">Biryanis</a> 
                                                	<a href="desserts.php">Desserts</a>
                                                </li>
                                                 <li>
                                                                                                         
                                                    
                                                    
                                                     <a href="indian_spcl.php"> Spécial Indien</a>
                                                    <a href="seafood.php">Poissons & Crevettes Seafood</a>
                                                     <a href="lamb.php">Plats- Main Courses Ageneau-Lamb</a>
                                                </li>                         
                                            </ul>                                           
                                        </li>
                                        <li><a href="reservation.php">Resérvation</a></li>
                                        <!-- 
                                        <li><a href="index.php">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>                                                       
                                                <li><a href="single-blog.html">Single Blog</a></li> 
                                            </ul>
                                        </li>
                                         -->
                                        <li><a href="contact.php">Contacts</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.php">Accueil	</a>
                                                <ul>
                                                    <!-- <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li> -->                                                       
                                                </ul>   
                                            </li>
                                            <li><a href="about.php">Actualité</a>
                                                <ul>                                                
                                                    <!-- <li><a href="about.php">About 2</a></li> -->
                                                </ul>   
                                            </li>
                                            <li><a href="index.php">Les Menus</a>
                                            <ul>
                                                <li>
                                                    <a href="starters.php">Entrée-Starters</a>
                                                    <a href="maison.php">Pains Maison</a>
                                                    <a href="beef.php">Boeuf-Beef</a>
                                                    <a href="vegetables.php">Légumes-Vegetables</a>                                                                                                      
                                                </li>
                                                <li>
                                                	<a href="chicken.php">Poulet Chicken</a>
                                                	<a href="rice.php">Riz-Rice</a>
                                                	<a href="biryani.php">Biryanis</a> 
                                                	<a href="desserts.php">Desserts</a>
                                                </li>
                                                 <li>
              										 <a href="indian_spcl.php"> Spécial Indien</a>
                                                    <a href="seafood.php">Poissons & Crevettes Seafood</a>
                                                     <a href="lamb.php">Plats- Main Courses Ageneau-Lamb</a>
                                                </li>                         
                                            </ul>                                           
                                        </li>
                                            <li><a href="reservation.php">Resérvation</a></li>
                                            <li><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Mobile Menu Area End -->
            </header>
            <!-- Header Area End Here -->
            <!-- Slider 1 Area Start Here -->               
            <div class="slider1-area">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">   
                        <img src="img/slider/slide3.png" alt="slider" title="#slider-direction-1"/>
                        <img src="img/slider/slide1.png" alt="slider" title="#slider-direction-2"/>
                        <img src="img/slider/slide2.png" alt="slider" title="#slider-direction-3"/>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c">
                                <h1 class="title1"> Bienvenue à  <span>SHALIMAR</span></h1>
                                
                                <div class="slider-btn-area">
                                    <a href="reservation.php" class="ghost-btn">Commandez Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                             <div class="title-container s-tb-c">
                                <h1 class="title1">Plats Spéciaux de Poulet</h1>                              
                                <div class="slider-btn-area">
                                    <a href="reservation.php" class="ghost-btn">Commandez Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-3">
                             <div class="title-container s-tb-c">
                                <h1 class="title1">Les épices indiennes de <span>SHALIMAR</span> Restaurant</h1>                                
                                <div class="slider-btn-area">
                                    <a href="reservation.php" class="ghost-btn">Commandez Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- Slider 1 Area End Here -->
            <!-- About 2 Area Start Here -->
            <div class="about2-area">
                <div class="container">
                    <div class="row">
                        <div class="about2-wrap">
                            <div class="about2-top">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="about2-top-box">
                                        <!-- <i class="flaticon-hamburger"></i>  -->
                                        <img src="img/logo/icon2.png">
                                        <h2><a href="starters.php">Entrée-Starters</a></h2> 
                                        <p>L'alimentation du démarreur indien a sa propre place dans le menu des plats indiens. Démarreurs indiennes peuvent également être consommées comme en-cas. Starters sont indiens, épicé et délicieux fumet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="about2-top-box">
                                         <img src="img/logo/spcl.png">
                                        <h2><a href="indian_spcl.php"> Spécial Indien</a></h2> 
                                        <p>La cuisine indienne est plus diversifiée que les autres aliments dans le monde. Il y a plus de 100 différentes différences dans l'alimentation traditionnelle et couche avec un même lieu que vous déplacez d'une maison à l'autre</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="about2-top-box">
                                         <img src="img/logo/ice-cream.png">
                                        <h2><a href="desserts.php">Desserts</a></h2> 
                                        <p>Une glace faite avec du lait et du sucre, avec une variété de saveurs telles que la mangue, safran, ou de cardamome.</p>
                                    </div>
                                </div>
                            </div>                    
                        </div>                    
                    </div>                    
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="about2-award-box wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                                <div class="media">
                                    <a href="index.php" class="pull-left">
                                        <i class="flaticon-restaurant"></i>
                                    </a>
                                    <div class="media-body">
                                        <h2 class="about-counter" data-num="1360">1360</h2>
                                        <p>REPAS UNIQUE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="about2-award-box wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                <div class="media">
                                    <a href="index.php" class="pull-left">
                                        <i class="flaticon-food"></i>
                                    </a>
                                    <div class="media-body">
                                        <h2 class="about-counter" data-num="3369">3369</h2>
                                        <p>PERSONNE SATISFAITE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="about2-award-box wow fadeInDown" data-wow-duration="1s" data-wow-delay=".75s">
                                <div class="media">
                                    <a href="index.php" class="pull-left">
                                        <i class="flaticon-cooker"></i>
                                    </a>
                                    <div class="media-body">
                                        <h2 class="about-counter" data-num="5335">5335</h2>
                                        <p>HAPPY CLIENTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About 2 Area End Here -->
            <!-- Special Dish Area Start Here -->
            <div class="special-dish-area">
                <div class="container">
                    <h2 class="title">Shalimar Plats Spéciaux</h2>
                    <span class="subtitle-color">Découvrir L'Alimentation</span>
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="4"
                            data-margin="15"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="1"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="3"
                            data-r-small-nav="true"
                            data-r-small-dots="false"
                            data-r-medium="4"
                            data-r-medium-nav="true"
                            data-r-medium-dots="false">                        
                            
                            <div class="special-dish-box">
                                <span>11.00€</span>
                                <a href="seafood.php"><img class="img-responsive" src="img/recipe/seafoods/shalimar3.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="seafood.php">Poisson Shalimar</a></h3>
                                <p>Poissons & Crevettes Seafood.</p>
                                <a href="seafood.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>11.00€</span>
                                <a href="lamb.php"><img class="img-responsive" src="img/recipe/lamb/lamb1.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="lamb.php">Agneau Madras</a></h3>
                                <p>Plats- Main Courses Ageneau-Lamb</p>
                                <a href="lamb.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>9.00€</span>
                                <a href="chicken.php"><img class="img-responsive" src="img/recipe/chicken/chicken ginger.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="chicken.php">Poulet Ginger</a></h3>
                                <p>Poulet Chicken</p>
                                <a href="chicken.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>10.00€</span>
                                <a href="starters.php"><img class="img-responsive" src="img/recipe/starter/praja-18.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="starters.php">Prajapati (Nouveau)</a></h3>
                                <p>Entrée-Starters</p>
                                <a href="starters.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>25.00€</span>
                                <a href="lamb.php"><img class="img-responsive" src="img/recipe/lamb/chicken6.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="lamb.php">Agneau Balti Gost (Nouveaue)</a></h3>
                                <p>Plats- Main Courses Ageneau-Lamb</p>
                                <a href="lamb.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>6.00€</span>
                                <a href="starters.php"><img class="img-responsive" src="img/recipe/starter/lentiles14.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="starters.php">Borda De Lentilles</a></h3>
                                <p>Entrée-Starters</p>
                                <a href="starters.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <!-- <div class="special-dish-box">
                                <span>11.00€</span>
                                <a href="lamb.php"><img class="img-responsive" src="img/recipe/lamb/vindaloo5.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="lamb.php">Agneau Vindaloo</a></h3>
                                <p>Plats- Main Courses Ageneau-Lamb</p>
                                <a href="lamb.php" class="ghost-semi-color-btn">Détails</a>
                            </div>
                            <div class="special-dish-box">
                                <span>10.00€</span>
                                <a href="chicken.php"><img class="img-responsive" src="img/recipe/chicken/butter-chicken.jpg" alt="dish"></a>
                                <h3 class="title-small title-bar-small-center"><a href="chicken.php">Butter Chicke</a></h3>
                                <p>Poulet Chicken</p>
                                <a href="chicken.php" class="ghost-semi-color-btn">Détails</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Special Dish Area End Here -->
            <!-- Tasty Menu Area Start Here -->
            <div class="tasty-menu-area">
                <div class="container">   
                    <div class="row">
                    <h2 class="title">Menu Savoureux Aujourd'hui</h2>
                    <span class="subtitle">Shalimar Spéciaux</span>                 
                        <div class="tasty-menu-inner">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3 class="inner-sub-title title-bar-full-width">Entrée-Starters</h3>
                                <ul>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/shrimbs4.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Salade Poulet Ou Cerevettes</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho </p>   -->
                                                <span>7.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/raita6.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Raita</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho </p>   -->
                                                <span>5.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/fish_pakoda9.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Poisson Pakora</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho </p>   -->
                                                <span>6.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/chicken-26.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Gambas Tandoori</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p>   -->
                                                <span>15.50€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/reshmi20.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Reshmi Kebab (nouveau)</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p>   -->
                                                <span>6.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3 class="inner-sub-title title-bar-full-width">Poissons & Crevettes Seafood</h3>
                                <ul>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/shalimar3.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Poisson Shalimar</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p> -->  
                                                <span>11.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/fish1.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Poisson Madras</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p>  --> 
                                                <span>6.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/shrimbs.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Poisson Punjabi (Nouveau)</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p>  --> 
                                                <span>11.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/shrimps krahi.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Crevettes Krahi</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p>  --> 
                                                <span>13.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <a href="index.php" class="pull-left">
                                                <img src="img/homepage/gambas krahi.jpg" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="index.php">Gambass Krahi</a></h4>
                                                <!-- <p>Nous créons, Fabriquons et Servons Fresho</p> -->  
                                                <span>19.00€</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Client Area Start Here -->
            <div class="client-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="1"
                            data-margin="30"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="1"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="1"
                            data-r-small-nav="false"
                            data-r-small-dots="true"
                            data-r-medium="1"
                            data-r-medium-nav="false"
                            data-r-medium-dots="true">                        
                            <div class="client-box">
                                <a href="index.php"><img src="img/client/client.jpg" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>C'était une soirée fantastique dans votre superbe restaurant qui a été apprécié par tout le monde qui a
                                	eu la chance d'être là. Le menu, l'ambiance et l'attention spéciale accordée par votre personnel pour les invités, était comme toujours de la plus haute norme. Nous continuons de recevoir des compliments par beaucoup
                                	de ceux qui étaient présents</p>
                                <h3 class="title-bar-big-center"><p>Francesca Graham Bell</p></h3>
                            </div>
                            <div class="client-box">
                                <a href="index.php"><img src="img/client/client2.jpg" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>J'ai eu une merveilleuse soirée hier, pour mon anniversaire, au Chili. La nourriture était, comme d'habitude, absolument délicieux et ma mère et j'ai tout apprécié</p>
                                <h3 class="title-bar-big-center"><p>Leon,</p></h3>
                            </div>
                            <div class="client-box">
                                <a href="index.php"><img src="img/client/client3.jpg" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>Merci pour une magnifique soirée. Nous avons fait passé quelques soirs et nous avons été enchantés par la magie des lumières. Nous n'avons jamais négocié sur cette merveilleuse expérience. Excellente cuisine, service et de divertissement.</p>
                                <h3 class="title-bar-big-center"><p>Arthur Fernandez</p></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Client Area End Here -->
            <!-- Recipe of the day 2 Area Start Here -->
            <div class="recipe-of-the-day2-area">
                <img src="img/recipe-of-the-day2-banner.png" class="img-responsive section-back" alt="recipe-of-the-day2-banner">
                <div class="container">
                    <h2 class="title-color">Pack Combo</h2>
                    <span class="subtitle-color">Shalimar Spécial</span>                   
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="3"
                        data-margin="30"
                        data-autoplay="false"
                        data-autoplay-timeout="10000"
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
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="index.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="food-menu-details.php"><img src="img/homepage/combo pack/1.jpg" alt="Recipe" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3><a href="index.php">Menu Midi 11.00€</a></h3>
                                <h5>Plats</h5>
                                <p>Cheese nan (ou) Nan Nature</p>
                                <p>Poulet Shani Korma (ou) Boeuf Madras</p>
                                <p>Keema Matter (ou) Bhurtha (ou) Poulet Curry</p>
                                <h5>Desserts</h5>
                                <p>
                                	<ul>
                                		<li>Halwa (ou) </li>
                                		<li>Sorset (ou)</li>
                                		<li> Cafe</li>
                                	</ul> 
                                </p>
                                <!-- <ul>
                                    <li><a href="index.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>00 Mins</span></a></li>
                                    <li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>00 People</span></a></li>
                                </ul>  -->
                            </div>
                        </div>
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="food-menu-details.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="food-menu-details.php"><img src="img/homepage/combo pack/2.jpg" alt="Recipe" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3><a href="">Menu Midi 13.00€</a></h3>
                                <h5>Entrée</h5>
                                <p>Poulet Pakora (ou) Poulet Tandoori (ou) Raita (ou) Seekh Kebab</p>
                                <h5>Plats</h5>
                                <p>Boruf Madras (ou) Poulet Korma (ou) Keema Matter Panner (ou) Palak Paneer (ou) Poulet Madras</p>
                                <h5>Dessert</h5>
                                 <p>Halwa (ou) Sorset (ou) Cafe</p>
                                <!-- <ul>
                                    <li><a href="index.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>00 Mins</span></a></li>
                                    <li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>00 People</span></a></li>
                                </ul>  -->
                            </div>
                        </div>
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="food-menu-details.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="food-menu-details.php"><img src="img/homepage/combo pack/3.jpg" alt="Recipe" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3><a href="">Menu Shalimar 13.00€</a></h3>
                                <h5>Entrée</h5>
                                <p>Mix Pakora (ou) Poulet Tandoori (ou) Raita (ou) Seekh Kebab</p>
                                <h5>Plats</h5>
                                <p>Boeuf Madras (ou) Poulet Korma (ou) Palak Paneer (ou) Poulet coco</p>
                                <h5>Dessert</h5>
                                 <p>Halwa (ou) Kulfi Mangue (ou) Sorset 2 Boulles (ou) Cafe</p>
                                <!-- <ul>
                                    <li><a href="index.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>00 Mins</span></a></li>
                                    <li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>00 People</span></a></li>
                                </ul>  -->
                            </div>
                        </div>
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="food-menu-details.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="food-menu-details.php"><img src="img/homepage/combo pack/4.jpg" alt="Recipe" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3><a href="">Menu Voyage 23.00€</a></h3>
                                <h5>Entrée</h5>
                                <p>Samossa légumes (ou) Poulet Tikka (ou) Poisson Pakora (ou) Cheese Nan (ou) Garlic Nan (ou) Pavot Nan (ou) Crevettes Pakora</p>
                                <h5>Plats</h5>
                                <p>Poisson Korma (ou) Poulet Tikka Massala (ou) Boeuf Vindaloo (ou) Biriyani Poulet (ou) Palak Panner</p>
                                <h5>Dessert</h5>
                                 <p>Halwa (ou) Kulfi Pistache (ou) Colonel (ou) Halwa (ou) Gulab Jamun</p>
                                <!-- <ul>
                                    <li><a href="index.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>00 Mins</span></a></li>
                                    <li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>00 People</span></a></li>
                                </ul>  -->
                            </div>
                        </div>
                        <div class="recipe-box2">
                            <ul class="recipe-box2-social">
                                <li><a href="food-menu-details.php"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                            </ul>                               
                            <div class="recipe-box2-img-holder">                                   
                                <a href="food-menu-details.php"><img src="img/homepage/combo pack/5.jpg" alt="Recipe" class="img-responsive"></a>
                            </div>
                            <div class="recipe-box2-bottom-content-holder">
                                <h3><a href="">Menu For Enfant 10€</a></h3>
                                <p><ul>
                                	<li>Jus de fruit (ou)</li>
                                	<li>Assiette avec Riz et Salade (ou)</li>
                                	<li>Grenadina (ou)</li>
                                	<li>Poulet pakora (ou)</li>
                                	<li>Menthe (ou)</li>                               	
                                	<li>Poulet tikka (ou)</li>
                                	<li>Poulet tandoori (ou)</li>                               	
                                	<li>Servi avec cheese Nan (ou)</li>
                                	<li> Nan Nature</li>
                                	</ul></p>
                                	<h5>Dessert</h5>
                                	<ul>
                                		<li>Halwa (ou)</li>
                                		<li>Sorbet</li>
                                	</ul>                                
                                <!-- <ul>
                                    <li><a href="index.php"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>00 Mins</span></a></li>
                                    <li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>00 People</span></a></li>
                                </ul>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recipe of the day 2 Area End Here -->
            <!-- Table reservation3 Area Start Here -->
            <div class="table-reservation3-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                            <div class="table-reservation3-left">
                                <img class="img-responsive" src="img/about1.jpg" alt="client">    
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="table-reservation3-right wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <span>Prendre un</span>
                                <h2>RÉSERVATION</h2> 
                                <div class="row reservation-form3">                                	
                                   <form method="post" action="" id="reservationForm">  
                                	     <div class="error_test col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
											<p>*Veuillez Remplir tous les Champs</p>
										</div> 
										 <div class="error_mail col-lg-12 col-md-12 col-sm-12 col-xs-12">	
										 	<p>*Veuillez saisir le courriel valide</p>
										</div>  
										
										 <div class="error_tele col-lg-12 col-md-12 col-sm-12 col-xs-12">	
										 	<p>*Entrer valide non</p>
										</div>                                            
                                        <div class="reservation-input-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <input type="text" class="form-control" placeholder="Prénom*" name="name" id="contactname"/>
                                        </div>
                                        <div class="reservation-input-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Email*" name="email" id="email"/>
                                        </div>
                                        <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Téléphone*" name="phone" id="form-phone"/>
                                        </div>
                                        <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <input type="text" class="form-control rt-date" placeholder="Date*" name="date" id="form-date"/>
                                        </div>
                                        <div class="reservation-input-box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <input type="text" class="form-control rt-time" placeholder="Temps*" name="time" id="form-time"/>
                                        </div>
                                         <div class="reservation-input-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" placeholder="Message*" name="message" rows="3" id="message" ></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" name="contact_submit" class="book-now-btn">Réserver Une Table</button>
                                         <div>
                                            <div class="success col-lg-12 col-md-12 col-sm-12 col-xs-12">	
										 	<p>*Envoyer par e-mail avec succès</p>
											</div>
                                            </div>
                                        </div>
                                    </form>                                 
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table reservation3 Area Start Here -->
            <!-- Brand Area Start Here -->
            <div class="brand-area">
                <img class="img-responsive section-back" src="" alt="">
                <div class="container">
                    <div class="row">                         
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="6"
                            data-margin="15"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="2"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="3"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="4"
                            data-r-small-nav="true"
                            data-r-small-dots="false"
                            data-r-medium="6"
                            data-r-medium-nav="true"
                            data-r-medium-dots="false"> 
                            <div class="brand-area-box">
                                <img src="img/brand/11.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/14.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/15.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/18.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/20.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                               <img src="img/brand/21.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/22.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/16.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/12.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                               <img src="img/brand/13.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/18.jpg" alt="brand">
                            </div>
                            <div class="brand-area-box">
                                <img src="img/brand/21.jpg" alt="brand">
                            </div>
                        </div>  
                    </div>  
                </div>  
            </div>  
            <!-- Brand Area End Here -->
            <!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top section-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">À propos de shalimar</h3>
                                    <div class="footer-about">
                                        <p>Shalimar a l'atmosphère joviale d'un repas du dimanche autour de votre grands-parents sociable, simple, fiable, et presque certain de vous combler. 
                                        	Une fois à l'intérieur, choisir de s'asseoir dans le bar spacieux de l'espace et commencer avec un
											soft gluant oeuf dur avec un mélange de légumes et une cuisine indienne à être présentés
											d'une façon très permet à l'aliment lui-même "le parler".</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">Shalimar Spécial</h3>
                                    <div class="footer-blog-post">
                                        <div class="media">
                                            <a href="indian_spcl.php" class="pull-left">
                                                <img src="img/footer/footer1 (1).jpg" alt="footer-blog" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="indian_spcl.php">Menu Midi</a></h4>
                                                <p>11.00€</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="footer-blog-post">
                                        <div class="media">
                                            <a href="indian_spcl.php" class="pull-left">
                                                <img src="img/footer/footer2 (1).jpg" alt="footer-blog" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="indian_spcl.php">Menu Voyage</a></h4>
                                                <p>23.00€</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="footer-blog-post">
                                        <div class="media">
                                            <a href="indian_spcl.php" class="pull-left">
                                                <img src="img/footer/footer3 (1).jpg" alt="footer-blog" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h4><a href="indian_spcl.php">Menu Shalimar</a></h4>
                                                <p>19.00€</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">Heures d'ouverture</h3>
                                    <ul class="opening-schedule">
                                    	<li>Ouvert 7J/7 de 11h30 à 14h30 et de 18h30 à 22h45 </li>
                                    	<ul class="footer-social">
                                        <li><a href="http://www.facebook.com/shalimar"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.twitter.com/shalimar"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.linkedin.com/shalimar"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.plus.google.com/shalimar"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    	</ul>
                                        <!-- <li>Lundi<span> 5pm - 11pm</span></li>
                                        <li>Mardi<span> 5pm - 11pm</span></li>
                                        <li>Mercredi <span> Fermé</span></li>
                                        <li>Jeudi<span> 5pm - Minuit</span></li>
                                        <li>Vendredi<span> 4:30pm - Minuit</span></li>
                                        <li>Samedi <span> 5pm - 11pm</span></li>
                                        <li>Dimanche<span> 5pm - 11pm</span></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                    	 <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <p>&copy; 2016 Shalimar Tous droits réservés.  &nbsp; Conçu par<a target="_blank" href="http://www.etekchnoservices.com"> Etekchnoservices</a>.com</p>
                    </div>
                   
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                     <div class="count pull-right">
							 	<span class="visitor">Comptage des visiteurs :</span>
								<a href="http://www.marcleaningservices.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=2186632&f=16777215&b=0" alt="janitorial service broward"></a><br>
								<a href="http://www.marcleaningservices.com" target="_blank"> </a>
					</div>
                    </div>
               			 </div>
                 	</div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        
        
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

        <!-- Date Time Picker Js -->
        <script src="js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>

        <!-- Validator js -->
        <script src="js/validator.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>
         


		

    </body>
</html>
