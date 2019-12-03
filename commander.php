
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/theme.css" rel="stylesheet" media="all">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

  





<?php include 'test.php';?>


<br>
<br>
                                <div class="container"><div class="row">
                                <div class="col-lg-4">
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
                                                <button type="submit" class="btn btn-lg btn-info btn-block style="color:white" name="formconnexion"> <i class="fa fa-lock"></i>
 connexion</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
 <div class="col-lg-4">
 <div class="card">
                                    <div class="card-header">
                                        <strong>Livraison</strong>
                                    </div>
                                    <div class="card-body card-block">
									<form action="connexion_livraison.php" method="post" class="">

                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Nom</label>
                                            <input type="text"  name="nom"placeholder="Entrer votre nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">CIN</label>
                                            <input type="text" name="cin" placeholder="12345678" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Rue</label>
                                            <input type="text" name="rue" placeholder="Entrer numero de rue" class="form-control">
                                        </div>
										<div class="row">
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Ville</label>
                                                    <input type="text" name="ville" placeholder="Entrer votre ville" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label"> Code Postal</label>
                                                    <input type="text" name="code" placeholder=" Code Postal" class="form-control">
                                                </div>
                                            </div>
                                        </div></div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">pays</label>
                                            <input type="text" name="pays" placeholder="pays" class="form-control">
                                        </div>
										<button id="payment-button" type="submit" name="livraison" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Envoyer </span>
                                                </button>
                                    </div>                                        </form>

                                </div>
 </div>
 
 <div class="col-lg-4">
 <div class="card">
                                    <div class="card-header"><b>Paiement</b></div>
                                    <div class="card-body">
                                       
                                        <form action="connexion_paiment.php" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Montant a payer</label>
                                                <input id="cc-pament" name="montant" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Nom sur carte</label>
                                                <input id="cc-name" name="nom" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Numero de carte</label>
                                                <input id="cc-number" name="numero" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1"> Date d'expiration</label>
                                                        <input id="cc-exp" name="date" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Code de sécurité</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="code" type="password" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" name="paiement" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Payer </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
 </div>                             
 </div>                             
                                                       
                      
						 
</div>							
<br>
<br>
<br>
<?php include 'footer.php';?>





</body>
</html>


