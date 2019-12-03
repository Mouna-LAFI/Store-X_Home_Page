
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

            <!-- MAIN CONTENT-->
            <div class="main-content">

			 <div align="right">
									    <button class="au-btn au-btn-icon au-btn--blue" onclick="window.location='upload_product.php'">

                                        <i class="zmdi zmdi-plus"></i>Ajouter un produit</button> </div>
										<br>
										<br>
  <div class="container">
  <table class="table table-striped" width="600 px" height="100%">
    <thead>
      <tr>
	   <th>Id</th>
	   <th>Categorie</th>
       <th>Type</th>
	   <th>Nom</th>
       <th>Image</th>
       <th>Etat</th>
       <th>Disponible</th>
       <th>Garantie</th>
       <th>Prix</th>
       <th>Solde</th>
       <th>Action</th>

      </tr>
    </thead>
	
	
	
	
	
	
	
	<?php


$con = mysqli_connect("localhost","root","","espace_produits");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}



    $result = mysqli_query($con,"SELECT * FROM `produits`");
     
while($donnees = mysqli_fetch_array($result))  
{
 ?>
 
 
 
   <tr> 
   <td ><?php echo $donnees['id'];?> </td>
   <td ><?php echo $donnees['categorie'];?></td>
   <td  ><?php echo $donnees['type'];?></td>
   <td  ><?php echo $donnees['nom'];?> </td>
      <td><?php echo "<img src='images/".$donnees['image']."' height='100' width='100' >";?></td>
   <td><?php echo $donnees['etat'];?></td>
   <td><?php echo $donnees['disponible'];?></td>
   <td><?php echo $donnees['garantie'];?></td>
   <td><?php echo $donnees['prix'];?></td>
   <td><?php echo $donnees['solde'];?></td>


 
  <td >
  <a href="edit_product.php?id=<?php echo $donnees['id'];?> "style="text-decoration:none" onclick="return confirm('Voulez-vous modifier ce contenu ?');">
  <button class="btn btn-danger">modifier</button>
  </a>&nbsp;&nbsp;&nbsp;

  <a href="supprimer_product.php?id=<?php echo $donnees['id'];?>" style="text-decoration:none"onclick="return confirm('Voulez-vous supprimer ce contenu ?');"><button class="btn btn-success">supprimer</button>
  </a>
	</tr> 
            <?php
            }
            ?>
  </table>
 </body>
 