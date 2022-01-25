<?php
    require_once("connexion.php");
    session_start();
    if(isset($_GET['base']))//si il une variable est transmise par la methode GET
    {
        $var= $_GET['base'];
        $reqbase = $bdd->prepare("SELECT * FROM $var");
        $reqbase->execute();
        $basexist = $reqbase->rowCount();
        $bddmap=array();
        if($basexist != 0)
        {
            while ($donnees = $reqbase->fetch())
            {
                $bddmap [] = $donnees;
            }
            if(isset($_SESSION['ID']))
                $sliced_bddmap = array_slice($bddmap, 0, 25);
            else
                $sliced_bddmap = array_slice($bddmap, 0, 7);
            echo json_encode($sliced_bddmap);
        }
    }
	//choix du questionnaire
?>
