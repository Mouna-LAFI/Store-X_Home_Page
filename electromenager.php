
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
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: warning;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  
}


</style>
</head>
<body>
<?php include 'test.php';?>

<?php include 'carousel.php';?>
 
<br>
<br>

<?php	 
 $connect = mysqli_connect("localhost", "root", "", "espace_produits");  
 $query ="SELECT * FROM produits where(categorie='electromenager') ";  
 $result = mysqli_query($connect, $query); 
 echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";
echo'<div class= "container">';
echo'<div class= "row">';
while($row = mysqli_fetch_array($result))  {
echo'<div class= "col-3">';
echo'<div class= "card">';
echo '<a href="details.php?id=' . $row['id'] . '" " style="color:black " ></a>';	
echo "<img src='images/".$row['image']."' >";
echo $row['nom'];echo"&nbsp";echo"&nbsp";echo"&nbsp";
echo $row['prix'];echo'</div >';echo'<br>';echo'</div >';
;}echo'</div >';echo'</div >';


  ?> 
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


