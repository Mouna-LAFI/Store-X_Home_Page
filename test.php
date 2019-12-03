 <?php
 session_start();
         

?>
 
<!DOCTYPE html>
<html >
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<!--navbar starts from here-->
<nav class="navbar" style="background:#778899;">

  

<div class="col">
<h1 style="color:#ffae42"><b>STORE-X </b></h1>

</div>
<div class="row">
<div class="col">
<a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"style="color:white"><b>
        INFORMATIQUES</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="accessoire.php">Accessoires Informatiques</a>
        <a class="dropdown-item" href="pc_portable.php">PC Portables</a>
        <a class="dropdown-item" href="imprimante.php">Imprimantes</a>
      </div>
  <!--navbar_ul_amrc ends here-->
</div>
<div class="col">
<a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"style="color:white"><b>
        TELEPHONIE</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="smart.php">Smartphones</a>
        <a class="dropdown-item" href="ecouteurs.php">Ecouteurs</a>
      </div>
  <!--navbar_ul_amrc ends here-->
</div>

<div class="col">
 <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown" style="color:white"><b>
        ELECTROMENAGER</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="laver.php">Machine à laver</a>
        <a class="dropdown-item" href="vaisselle.php">machine à vaisselle </a>
        <a class="dropdown-item" href="cafe.php">machine à cafe</a>
      </div>
  <!--navbar_ul_amrc ends here-->
</div>
<div class="col">
 <a class="nav-link " href="contact.php" id="navbardrop"  style="color:white"><b>
        CONTACT</b>
      </a>
  <!--navbar_ul_amrc ends here-->
</div>


</div>
<div class="col" align="right">
<button type="button" class="btn btn-warning"> 
<i class="fa fa-user" style="color:white"></i> <a href="login.php" style="color:white;text-decoration:none"><b><?php  


if(isset($_SESSION['pseudo'])){
	
	
	echo $_SESSION['pseudo'];
}
else 
{
	echo 'Bienvenue';
}


?>
</b></a></button> 

  <!--navbar_ul_amrc ends here-->
</div>

</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body></html>
