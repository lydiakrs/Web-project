<?php
session_start();//demarrage d'une session

require_once('../php/connexion.php');//importation 


if(isset($_SESSION['ID']))//test l'existance d un id ->eviter les injection sql
{
        $getid = intval($_SESSION['ID']); //verifie si cest un entier
        $requser = $bdd->prepare('SELECT * FROM user WHERE ID = ?');//on selection tous lorsqu'on l'id vaut->preparation de la requete
        $requser->execute(array($getid));//execute la requete 
        $userinfo = $requser->fetch();//recuperation de chaque ligne du a la requete 
        json_encode($getid);//decodage du code json


?>

<html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="author" content="tatibouet khris">
      <title>Formulaire</title> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="../css/accueil.css" rel="stylesheet" type="text/css">
    </head>

    <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="accueil.php">Home</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav"></ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../php/deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
            </ul>
          </div>
        </div>
    	</nav>

      <div class="container">
        <div class="text-center page-header">
          <h1>Super Exploreur</h1>  
        </div>
      </div>


        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
              <div class="center-block">
                <div class="f" id="f4">
                  <?php
          		if (isset($_SESSION['ID']) AND ($_SESSION['ID'] == '1' OR $_SESSION['ID'] == '2'))//teste si l'utilisation est administrateur
                  {
                  ?>
                      <a href="admin.php" ><input class="btn" type="button" value="Creer Questionnaire"></a>
                  <?php

                  }

                  if (isset($_SESSION['ID']))//si le profil existe 
                  {
                  ?>
                  <h2> Profil de <?php echo $userinfo['PSEUDO']; ?></h2>
                  <h4> Bienvenue <?php echo $userinfo['PRENOM'];?> <?php echo $userinfo['NOM'];?></h4>
                  <h4>Votre mail : <?php echo $userinfo['MAIL']; ?> </h4>

                  <a href="jeu.html?e=pays3"> <input class="btn" type="button" value="trouve les devises de ces pays"></a>
                  <a href="jeu.html?e=pays2"> <input class="btn" type="button" value="trouve le pays de ce drapeau"></a>
                  

                  <?php
                  }

                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="container">
          <h2 >Clickez pour jouer !</h3>

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <div class="carousel-inner">

            <div class="item active">
              <a href="jeu.html?e=pays2"><img src="../IMAGE/capital.jpg" alt="trouve le drapeau de ce pays" style="width:100%;"></a>
            </div>

            <div class="item">
              <a href="jeu.html?e=pays3"><img src="../IMAGE/devise.jpg" alt="trouve la devise de ce pays" style="width:100%;"></a>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <script src="../javaScript/jeu.js"></script>

    </body>
    </html>
<?php
}
else
{
    header("Location: accueil.php");
}
?>
