<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_produits"; 
$quantite=$_POST['quantite'];
$id=$_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "UPDATE produits SET quantite='$quantite' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	   header("Location:commander.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




