<?php include 'header.php';?>


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

 $connect = mysqli_connect("localhost", "root", "", "espace_produits");  
 $query ="SELECT * FROM produits  ";  
 $result = mysqli_query($connect, $query);  
while($donnees = mysqli_fetch_array($result))  
{
 ?>
   <tr>
   <td><?php echo $donnees['id'];?></td>
   <td><?php echo $donnees['categorie'];?></td>
   <td><?php echo $donnees['type'];?></td>
   <td><?php echo $donnees['nom'];?></td>
   <td><?php echo "<img src='images/".$donnees['image']."' height='100' width='100' >";?></td>
   <td><?php echo $donnees['etat'];?></td>
   <td><?php echo $donnees['disponible'];?></td>
   <td><?php echo $donnees['garantie'];?></td>
   <td><?php echo $donnees['prix'];?></td>
   <td><?php echo $donnees['solde'];?></td>
<td>
<a href='supprimeruser.php?id=<?php echo $data['id'] ?>' class='fa fa-trash-o' style='    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;    padding: 5px 10px;
    font-size: 14px;
    border-radius: 3px;
    border: 1px solid rgba(0,0,0,.12);
    background: #f5f5f5;color:red;'
					onclick="return confirm('Voulez-vous supprimer ce contenu ?');"></a>
<a href="supprimer_product.php?id=<?php echo $donnees['id'];?>" onclick="return confirm('Voulez-vous supprimer ce contenu ?');"> 
<i class="far fa-trash-alt"style="color:red"></i></a>

</td>
</tr> 
            <?php
            }
            ?>

</table>
</div></div></div>           
</div></div>           


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
