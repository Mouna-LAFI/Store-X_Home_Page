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

</head>
<body>

<?php include 'test.php';
	
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['contact'])) {
   $objet = $_POST['objet'];
   $mail = $_POST['mail'];
   $reference = $_POST['reference'];
   $message = $_POST['message'];
   if(!empty($_POST['objet']) AND !empty($_POST['mail']) AND !empty($_POST['reference']) AND !empty($_POST['message']) ) {
      
                     $insertmbr = $bdd->prepare("INSERT INTO contact(objet, mail, reference,message) VALUES(?, ?, ?,?)");
                     $insertmbr->execute(array($objet, $mail, $reference, $message));
                     $erreur = "Votre message a  été bien envoyé ! ";
                  } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}


       
         ?>
		 
<br>
<div class="container"  >
<div class="row"  >
<div class="col"  ><form action="contact.php" method="POST">

                                <div class="card">
                                    <div class="card-header">
                                        <strong><b>Contacter Nous !<b></strong>
                                        
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label"><b>Objet</b></label>
                                            <input type="text" name="objet" placeholder="Entrer votre objet" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label"><b>Adresse e-mail</b></label>
                                            <input type="email" name="mail" placeholder="Entrer votre e-mail" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label for="vat" class=" form-control-label"><b>Reference de commande</b></label>
                                            <input type="text" name="reference" placeholder="Entrer le reference " class="form-control">
                                        </div>
										<div class="form-group">
                                            <label for="vat" class=" form-control-label"><b>Message</b></label>
                                            <textarea rows="4" cols="50" name="message" placeholder="Votre message " class="form-control"></textarea>
                                        </div>
			<input class="btn btn-success" type="submit" name="contact" value=" Envoyer" />
</div>                                    
                                        </div>
                                         </form> 
										 <?php
										   if(isset($erreur)) {
            echo '<font color="green">'.$erreur."</font>";
         }
		 ?>
                                    </div>
                                

<div class="col"  >
                                <div class="card">
                                    <div class="card-header">
                                        <strong><b>Trouvez Nous !<b></strong>
                                        
                                    </div>
									<div class="form-group">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.861589595976!2d10.754187985420986!3d34.834572383545584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301d19d7d347b8b%3A0xca1fc87ce9d5f37b!2z2KfZhNmF2LnZh9ivINin2YTYudin2YTZiiDZhNmE2KXZhNmD2KrYsdmI2YbZitmDINmI2KfZhNin2KrYtdin2YQg2KjYtdmB2KfZgtiz!5e0!3m2!1sar!2stn!4v1568370171720!5m2!1sar!2stn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                        </div>
                                    <div class="card-body card-block">

			<input class="btn btn-success" type="submit" name="contact" value=" Aller vers maps" align="center" onclick="window.location.href='https://goo.gl/maps/wt43Mk1EXTY5hwHCA'" />
</div>                                    
                                        </div>
                                        
                                   

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>      
    </div>      
<br>
   <?php include 'footer.php';?>

</body>
</html>