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
                <a href="index.html">
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
                                <i class="fas fa-table"style="color:#947EB0"></i><b style="color:#947EB0">users</b></a>
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
                                            <a class="js-acc-btn" href="#"><b>Mouna Lafi</b></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/logo.png" alt="Mouna Lafi" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Mouna Lafi</a>
                                                    </h5>
                                                    <span class="email">MounaLafi@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header></div>
            <!-- MAIN CONTENT-->



 
            <div class="main-content">
			 <div class="col-lg-8">
    	<form method="POST" action="add_product.php" enctype="multipart/form-data">
		
      <table class="table">

    <thead>
      <tr>
	   <th >categorie</th>
       <th >type</th>
	   <th>nom</th>
       <th>etat</th>
       <th>disponible</th>


	   </tr>
	
    </thead>
   <tr>
   <td ><input type="text" name="categorie" > </td>
   <td><input type="text" name="nom" > </td>
   <td><input type="text" name="type" ></td>
   <td><input type="text" name="etat" ></td>
   <td><input type="text" name="disponible" ></td>


   </tr></table></br>
         <table class="table">

   <thead>
      <tr>
	         <th>processeur</th>
	   <th>systeme</th>
       <th>memoire</th>
       <th>disque</th>
       <th>carte</th>
     
      </tr></thead>
   <tr>
   <td><input type="text" name="processeur" ></td>
   <td><input type="text" name="systeme" ></td>
   <td><input type="text" name="memoire" ></td>
   <td><input type="text" name="disque" ></td>
   <td><input type="text" name="carte" ></td>
   
</tr>  </table>
<table class="table">
  <thead><tr><th>garantie</th>
       <th>prix</th>
       <th>solde</th>
       <th>image</th></tr></thead>
	   
	   <tr><td><input type="text" name="garantie"></td>
   <td><input type="text" name="prix" ></td>
   <td><input type="text" name="solde" ></td>
  	<td><input type="file" name="image"></td></tr></table>

  <div align="center">
 <button class="btn btn-danger" type="submit" name="upload" value="upload" >Ajouter un produit</button>
 </div>

   </form>  </div></div>

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
      

		



    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
