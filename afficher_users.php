<?php include 'header.php';?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
			 <div align="right">
                                    <button class="au-btn au-btn-icon au-btn--blue" onclick="window.location='add_user.php'">

                                        <i class="zmdi zmdi-plus"></i>Ajouter un utilisateur</button> </div>

        <?php
	 
 $connect = mysqli_connect("localhost", "root", "", "espace_membre");  
 $query ="SELECT * FROM membres  ";  
 $result = mysqli_query($connect, $query);  
 
 ?> 
 <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
	   <th>Id</th>
        <th>Nom utilisateur</th>
        <th>Email</th>
        <th>Mot de passe</th>
      </tr>
    </thead>
   	<?php  
	while($donnees = mysqli_fetch_array($result))  
{
 ?>
   <tr>
   <td><?php echo $donnees['id'];?></td>
   <td><?php echo $donnees['pseudo'];?></td>
   <td><?php echo $donnees['mail'];?></td>
   <td><?php echo $donnees['motdepasse'];?></td>

	<td>
<a href="edit_user.php?id=<?php echo $donnees['id'];?>" onclick="return confirm('Voulez-vous modifier cet utilisateur ?');"> 
<i class="far fa-edit"style="color:green"></i></a>
<a href="supprimer_users.php?id=<?php echo $donnees['id'];?>" onclick="return confirm('Voulez-vous supprimer cet utilisateur ?');"> 
<i class="far fa-trash-alt"style="color:red"></i></a>
</td>
</tr>

            <?php
            }
            ?>

  </table>
</div>

   
    
            </div>            
                      
                       
                       

                
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

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
