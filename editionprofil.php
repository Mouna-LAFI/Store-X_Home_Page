<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
	    if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
	  
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html>
   <head>
      <meta charset="utf-8">
	  	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
   <body>
      <div align="center">
         <h2 style="color:#F5B841;font-size:35px;"> <b>Voulez vous editer votre profil <b></h2><br />
		 <img src="img/avatar3.jpg" alt="Avatar" class="avatar"/></br></br>

         <div align="center">
            <form method="POST" action="" enctype="multipart/form-data">
			<table>
               <tr><td align="left"><label style="color:#F5B841" ><i class="fa fa-user"></i> Pseudo :</label></td>
               <td><input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br /></td></tr>
               <tr><td align="left"><label style="color:#F5B841"><i class="fa fa-envelope"></i> Mail :</label></td>
               <td><input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br /></td></tr>
               <tr><td align="left"><label style="color:#F5B841" > <i class="fa fa-key"></i> Mot de passe :</label></td>
               <td><input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br /></td></tr>
               <tr><td align="left"><label style="color:#F5B841"> <i class="fa fa-key"></i> Confirmation de mot de passe :</label></td>
               <td><input type="password" name="newmdp2" placeholder="Confirmation mot de passe" /><br /><br /></td></tr>
			   <tr><td/><br /></td></tr>
               <td align="right"><input class="btn btn-warning" type="submit" value="Mettre à jour mon profil !" /></td>
            </table>
			</form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>