<?php
$host = 'localhost';
$db = 'shalimar';
$username = 'root';
$password = '';
$link = mysql_connect($host,$username,$password);
if(!$link) {
	echo "not connecter".mysql_error();
}
else {
	
		mysql_select_db($db,$link);
}			 
?>
<header>                
                <div class="header2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 33 (0)1 30 32 71 76 /+ 33 (0)9 53 54 11 54</a></li>
                                            <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="food-menu-details.php">www.restaurantshalimar.fr</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li><a href="http://www.facebook.com/shalimar"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="http://www.twitter.com/shalimartaste"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="http://www.linkedin.com/shalimar"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="http://www.plus.google.com/shalimar"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                            <div class="row">                         
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo-area">
                                        <a href="index.php"><img class="img-responsive " src="img/logo/logo5.png" alt="logo"></a>
                                    </div>
                                </div>  
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <div class="main-menu-area">
                                        <nav>
                                            <ul>
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
                                                <li class="specific">
                                                    <a href="starters.php">Entrée-Starters</a>
                                                    <a href="maison.php">Pains Maison</a>
                                                    <a href="beef.php">Boeuf-Beef</a>
                                                    <a href="vegetables.php">Légumes-Vegetables</a>                                                  
                                                    
                                                </li>
                                                <li class="specific">
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <ul class="header-cart-area">
                                        <!-- <li class="header-search">
                                            <form>
                                                <input type="text" class="search-form" placeholder="Search...." required="">                                    
                                                <a href="food-menu-details.php" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </form>
                                        </li> -->
                                       
                                    </ul>
                                </div> 
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