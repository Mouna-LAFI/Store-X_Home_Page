 <?php
 session_start();
         

?>
 


<!DOCTYPE html>
<html >
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <h2 style="color:#6B3378"> Admin Dashboard  </h2>
                </a>
            </div>					

           <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      
                        <li>
                            <a href="afficher_product.php">
                                <i class="fas fa-chart-bar" style="color:#947EB0"></i><b style="color:#947EB0">Produits</b></a>
                        </li>
                        <li>
                            <a href="afficher_users.php">
							
							
						
                                <i class="fas fa-users" style="color:#947EB0"></i><b style="color:#947EB0">Utilisateurs</b></a>
                        </li>
						  <li>
                            <a href="#">
                                <i class="fas fa-users"style="color:#947EB0"></i><b style="color:#947EB0">Clients</b></a>
                        </li>
						  <li>
                            <a href="#">
							
                                <i class="fas fa-envelope"style="color:#947EB0"></i><b style="color:#947EB0">Messages</b></a>
                        </li>
                        
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
<div class="page-container">
            <!-- HEADER DESKTOP-->
			<div class="container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container">
                        <div class="header-wrap">
                     
                            <div class="header-button">
                              
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/logo.png" alt="Mouna Lafi" />
                                        </div>
											<div class="content">											
											
											<?php
												
                                        
 echo $_SESSION['pseudo'];?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/logo.png" alt="logo" />
                                                    </a>
                                                </div>
												<div class="content">
                                                    <h5 class="name">  

									  
<?php  
                                        
 echo $_SESSION['pseudo'];?>
                                                
													
						
                                                     
                                                    </h5>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                                <a href="index.php">
                                                    <i class="zmdi zmdi-power"></i>Deconnexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				            </header></div>

            <!-- HEADER DESKTOP-->