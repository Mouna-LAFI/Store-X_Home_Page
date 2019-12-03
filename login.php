<?php

include 'test.php';?>
<br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body>
 
                                <div class="container"><div class="row">
	    <div class="col-4">
								<div class="card">
                                    <div class="card-header"><b>Voulez vous deconnectez ?</b></div>
                                    <div class="card-body card-block">
                                        <form action="deconnexion.php" method="post" class="">
                                   <div class="form-actions form-group">
<button type="submit" class="btn btn-warning btn" style="color:white" name="formdeconnexion"> <i class="fas fa-power-off"></i> Déconnexion</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>							
								
                                <div class="col-4">
								<div class="card">
                                    <div class="card-header"><b>Déja Inscrit ?</b></div>
                                    <div class="card-body card-block">
                                        <form action="connexion.php" method="post" class="">
                                   
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="email" id="email2" name="mailconnect" placeholder="Email" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" id="password2" name="mdpconnect" placeholder="Mot de passe" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-warning btn" style="color:white" name="formconnexion"> <i class="fa fa-lock"></i>
 connexion</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header"><b>Créez votre compte</b></div>
                                    <div class="card-body card-block">
                                        <form action="inscription.php" method="post" >
                                            <div class="form-group">
                                                <div class="input-group">
                                                
                                                    <input type="text" id="username" name="pseudo" placeholder="Nom utilisateur" class="form-control">
													    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
                                                    <input type="email" id="email" name="mail" placeholder="Email" class="form-control">
												    <input type="email" placeholder="confirmer Email" id="mail2" name="mail2" class="form-control" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />

													<div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
                         <input type="password" id="password" name="mdp" placeholder="Mot de passe" class="form-control">
				         <input type="password" placeholder="Confirmer mot de passe" id="mdp2" name="mdp2" class="form-control"/>

<div class="input-group-addon">

                                                        <i class="fa fa-lock"></i>
                                                    </div>                                               
											   </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-warning btn"style="color:white" name="forminscription"> <i class="fa fa-user"></i>
												Créez votre compte</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div></div>
                        </div><br><br><br>
  
<?php include 'footer.php';?>


</body>
</html>
