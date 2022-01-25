<?php 
        require_once('connexion.php');
        if(isset($_POST['formRempli']))//recupere les information du formulaire
        {
            $Pseudo = htmlspecialchars($_POST['Pseudo']);
            $Nom = htmlspecialchars($_POST['Nom']);
            $Prenom = htmlspecialchars($_POST['Prenom']);
            $Mail = htmlspecialchars($_POST['Mail']);
            $MDP = md5($_POST['MDP']);
            $DN = htmlspecialchars($_POST['DN']);
            $Sexe = htmlspecialchars($_POST['Sexe']);
             
            if(!empty($_POST['Pseudo']) AND !empty($_POST['Nom'])  AND !empty($_POST['Sexe']) AND !empty($_POST['Prenom']) AND !empty($_POST['Mail']) AND !empty($_POST['DN']) AND !empty($_POST['MDP']))//test si les champ sont vide
            {
                $reqmail = $bdd->prepare("SELECT * FROM user WHERE MAIL= ?");
                $reqmail->execute(array($Mail));//regarde si l email existe dans la base de donnee
                $reqpseudo = $bdd->prepare("SELECT * FROM user WHERE PSEUDO= ?");
                $reqpseudo->execute(array($Pseudo)); 
                $mailexist = $reqmail->rowCount();
                $pseudoexist = $reqpseudo->rowCount();
                if($mailexist == 0)//l email est pas pris
                {
                    if($pseudoexist == 0)//le pseudo est pas pris
                    {
                        $insert = $bdd->prepare("INSERT INTO user(PSEUDO,NOM,PRENOM,DATE_NAISSANCE,SEXE,MAIL,MDP) VALUES(?,?,?,?,?,?,?)");
                        $insert->execute(array($Pseudo,$Nom,$Prenom,$DN,$Sexe,$Mail,$MDP));
                        echo "insertion !";
                    }
                    else
                    {
                        $erreur = "Pseudo deja utilisé";
                    }
                }
                else
                {
                    $erreur = "Adresse mail déja utilisé";
             
                }
            }
             else
             {
                $erreur = "Tous les champs doivent etre remplis";
                
             }
        }
?>
