<!DOCTYPE html>
<html lang="fr">
<head>
<?php
        require_once('../php/connexion.php');//sont necessaire pour l'execution
        require_once('../php/creation.php');?> 

    <meta charset="utf-8">
    <meta name="author" content="khris Lydia et Tatibouet Kevin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/accueil.css" />
    <title>Création de questionnaire</title>
</head>

<body>
        <div class="container">
          <div class="text-center page-header">
            <h1>Mode administrateur</h1>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                  <div class="center-block">
                      <form class="f" id="f3" autocomplete="on" method="POST">
                        <h2>Creation d'un nouveau questionnaire</h2>

                        <div for="NomT" class="form-group row">
                        <input class="control-label" type="text" name="NomT" id="NomT" placeholder="Nom de Table" autofocus value=<?php if(isset($NomT)) { echo $NomT; }?>>
                        </div>

                        <div for="NomM" class="form-group row">
                            <input class="control-label" type="text" name="NomM" id="NomM" placeholder="Nom " value=<?php if(isset($NomM)) {echo $NomM;} ?>>
                        </div>

                        <div for="LAT" class="form-group row">
                            <input class="control-label" type="text" name="LAT" id="LAT" placeholder="Longitude" value=<?php if(isset($LAT)) {echo $LAT;} ?>>
                        </div>

                        <div for="LNG" class="form-group row">
                          <input class="control-label" type="text" name="LNG" id="LNG" placeholder="Latitude" value=<?php if(isset($LNG)) {echo $LNG;} ?>>
                        </div>

                        <div for="Image" class="form-group row">
                            <input class="control-label" type="text" name="Image" id="Image" placeholder="Image/nom.png" value=<?php if(isset($Image)) {echo $Image;} ?>>
                        </div>

                        <div for="Pays" class="form-group row">
                            <input class="control-label" type="text" name="Pays" id="Pays" placeholder="Pays" value=<?php if(isset($Pays)) {echo $Pays;} ?>>
                        </div>

                        <div for="Ville" class="form-group row">
                            <input class="control-label" type="text" name="Ville" id="Ville" placeholder="Ville" value=<?php if(isset($Ville)) {echo $Ville;} ?>>
                        </div>

                        <div for="Link" class="form-group row">
                            <input class="control-label" type="text" name="Link" id="Link" placeholder="Lien wikipedia" value=<?php if(isset($Link)) {echo $Link;} ?>>
                        </div>

                        <div id="input" class="btn-group btn-group-lg">
                          <input class="btn" type="submit" name="questRempli" value="Entrer">
                          <input class="btn" type="reset" value="Reset">
                        </div>
                        <br>
                        <?php if(isset($erreur)){echo $erreur;}//affichage des erreur?> 
						
                  </form>
                </div>
              </div>
            </div>
          <script src="../javaScript/main.js"></script>
</body>
</html>
