<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['livraison'])) {
   $nom = $_POST['nom'];
   $cin = $_POST['cin'];
   $rue = $_POST['rue'];
   $ville = $_POST['ville'];
   $code = $_POST['code'];
   $pays = $_POST['pays'];   
   
   if(!empty($_POST['nom']) AND !empty($_POST['cin']) AND !empty($_POST['rue']) AND !empty($_POST['ville']) AND !empty($_POST['code'])AND !empty($_POST['pays'])) {
      
                     $insertmbr = $bdd->prepare("INSERT INTO livraison(nom, cin, rue,ville,code,pays) VALUES(?, ?, ?,?,?,?)");
                     $insertmbr->execute(array($nom, $cin, $rue, $ville, $code, $pays));
                     $erreur = "Votre adresse a  été bien envoyé ! ";
         header("Location: index.php");
                  } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}


       
         ?>
