
<?php
    try{//si tt se passe correctement
		$bdd = new PDO('mysql:host=localhost;dbname=bddmap;charset=utf8','root','root');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());//affichage du probleme poser
  }
?>
