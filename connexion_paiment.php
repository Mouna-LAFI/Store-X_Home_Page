<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['paiement'])) {
   $montant = $_POST['montant'];
   $nom = $_POST['nom'];
   $numero = $_POST['numero'];
   $date = $_POST['date'];
   $code = $_POST['code'];
   
   if(!empty($_POST['montant']) AND !empty($_POST['nom']) AND !empty($_POST['numero']) AND !empty($_POST['date']) AND !empty($_POST['code'])) {
      
                     $insertmbr = $bdd->prepare("INSERT INTO paiement(montant,nom,numero,date,code) VALUES(?, ?, ?,?,?)");
                     $insertmbr->execute(array($montant, $nom, $numero, $date, $code));
                     $erreur = "Votre adresse a  été bien envoyé ! ";
         header("Location: index.php");
                  } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}


       
         ?>
