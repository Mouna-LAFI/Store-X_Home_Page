
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>

 
a:link 
{ 
text-decoration:none; 
} 
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  text-align: center;
  font-family: arial;
}.card1{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 450px;
  text-align: center;
  font-family: arial;
}
</style>
</head>
<body>
<?php include 'test.php';?>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
 
 
        <?php

 $db = mysqli_connect("localhost", "root", "", "espace_produits"); $id=$_GET['id']; 
 $query ="SELECT * FROM produits WHERE (id=$id) ";  
 $result = mysqli_query($db, $query);  
 



  
?>
<br>
<br>
<br>
<?php

while ($row = mysqli_fetch_array($result)) {
	echo'<div class="container">';
	echo'<div class="row">';
 echo'<div class= "col" >';echo'<div class= "card" >';
    echo "<img src='images/".$row['image']."' >";echo'<br>';
	echo '<a style="color:#FEAC00 ;text-decoration: none;font-weight:bold;"" href="add_panier.php?id=' . $row['id'] . '"  ><h2><b>Ajouter au panier</b></h2></a>';echo'</div >';echo'</div >';
 echo'<div class= "col" >';  	

	echo'<h2 style="color:#FEAC00"align="center"><b> Détails du produit </b></h2>';echo'<br>';
echo 'Type:'; echo'&nbsp';echo'&nbsp';echo $row['type'];echo'<br>';
echo 'Nom:';echo'&nbsp';echo'&nbsp';echo $row['nom'];echo'<br>';
echo 'Categorie:';echo'&nbsp';echo'&nbsp';echo $row['categorie'];echo'<br>';
echo 'Etat:';echo'&nbsp';echo'&nbsp';echo $row['etat'];echo'<br>';
echo 'Disponible:';echo'&nbsp';echo'&nbsp';echo $row['disponible'];echo'<br>';
echo 'Processeur:';echo'&nbsp';echo'&nbsp';echo $row['processeur'];echo'<br>';
echo 'Systeme:';echo'&nbsp';echo'&nbsp';echo $row['systeme'];echo'<br>';
echo 'Memoire:';echo'&nbsp';echo'&nbsp';echo $row['memoire'];echo'<br>';
echo 'Solde:';echo'&nbsp';echo'&nbsp';echo $row['solde'];echo'<br>';
echo 'Prix:';echo'&nbsp';echo'&nbsp';echo $row['prix'];echo'&nbsp'; echo'TD';echo'<br>';
echo 'Disque:';echo'&nbsp';echo'&nbsp';echo $row['disque'];echo'<br>';
echo 'Carte:';echo'&nbsp';echo'&nbsp';echo $row['carte'];echo'<br>';
echo 'Garantie:';echo'&nbsp';echo'&nbsp';echo $row['garantie'];echo'&nbsp'; echo'mois';echo'<br>';echo'</div >';echo'</div >';
 }

?>
</div>
<br>
<br>
<br>
<?php include 'footer.php';?>





<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="color:black" class="fas fa-angle-double-up"></i></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>


