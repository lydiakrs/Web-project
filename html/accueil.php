<!DOCTYPE html>
<html lang="fr">
<head>
<?php
        require_once('../php/connexion.php');
		    require_once('../php/creation.php');
        require_once('../php/user.php');
        require_once('../php/connect.php');
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <title>Super Exploreur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/accueil.css" />

</head>

<body onload="init()" onload="buton()">
                  <div class="container">
                    <div class="text-center page-header">
                      <h1>Super Exploreur</h1>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="center-block">

                          <form class="f" id="f2" autocomplete="on" method="POST">
                            <div class="btn-group btn-group-lg">
                              <input class="btn" id="b21" type="button" value="Connexion">
                              <input class="btn active" id="b22" type="button" value="Inscription">
                            </div>

                            <h2>Inscription</h2>

                            <div class="form-group row">
                              <input type="text" name="Pseudo" id="Pseudo" class="control-label" placeholder="Pseudo" autofocus value=<?php if(isset($Pseudo)) { echo $Pseudo; }?>>
                            </div>

                            <div class="form-group row">
                              <input type="text" name="Nom" id="Nom" class="control-label" placeholder="Nom" value=<?php if(isset($Nom)) {echo $Nom;} ?>>
                            </div>

                            <div class="form-group row">
                              <input type="text" name="Prenom" id="Prenom" class="control-label" placeholder="Prenom" value=<?php if(isset($Prenom)) {echo $Prenom;} ?>>
                            </div>

                            <div class="form-group row">
                              <label for="DN"> Date de naissance :
                                <input type="date" name="DN" id="DN" min="1900/01/01" value=<?php if(isset($DN)) {echo $DN;} ?>>
                              </label>
                            </div>

                            <div class="form-group row">
                              <div class="radio-inline">
                                <input type="radio" name="Sexe" value="Homme">
                                <label class="custom-control-label" for="Sexe">Homme</label>
                              </div>
                              <div class="radio-inline">
                                <input type="radio" name="Sexe" value="Femme">
                                <label class="custom-control-label" for="Sexe">Femme</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <input id="Mail" type="text" class="control-label" name="Mail" placeholder="exemple@yahoo.fr" value=<?php if(isset($Mail)) {echo $Mail;} ?>>
                            </div>

                            <div class="form-group row">
                              <input id="MDR" type="password" class="control-label" name="MDP" placeholder="Mot de passe">
                            </div>

                            <div id="input" class="btn-group btn-group-lg">
                              <input class="btn" type="submit" name="formRempli" value="Entrer">
                              <input class="btn" type="reset" value="Reset">
                            </div>
                            <br>

                           <div style="color:red"> <?php if(isset($erreur)){echo $erreur;}?></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      <div class="center-block">

                        <form class="f" id="f1" autocomplete="on" method="POST" action="">
                          <div class="btn-group btn-group-lg">
                            <input class="btn active" id="b11" type="button" value="Connexion">
                            <input class="btn" id="b12" type="button" value="Inscription">
                          </div>

                          <h2>Connexion</h2>

                          <div class="form-group row">
                            <span class="control-label"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="pseudo" type="text" class="control-label" name="Pseudoco" placeholder="Pseudo">
                          </div>

                          <div class="form-group row">
                            <span class="control-label"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="control-label" name="Pw" placeholder="Password">
                          </div>

                          <div class="btn-group btn-group-lg">
                            <input class="btn" type="submit" name="Connect" value="Entrer">
                            <input class="btn" type="reset" value="Reset">
                          </div>
                          <a href="jeu.html?e=pays2" class="ModeInvite"><input class="btn" type="button" value="Mode invite"></a>
                            <?php if(isset($erreur)){echo $erreur;}?>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>

                <script src="../javaScript/main.js"></script>
                <script>
                  document.getElementById("b12").addEventListener("click",init1);
                  document.getElementById("b21").addEventListener("click",init2);
                </script>


</body>
</html>
