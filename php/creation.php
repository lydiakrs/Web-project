
<?php
        require_once('connexion.php');
        if(isset($_POST['questRempli']))
        {
            $NomT = htmlspecialchars($_POST['NomT']);
            $NomM = htmlspecialchars($_POST['NomM']);
            $LAT = htmlspecialchars($_POST['LAT']);
            $LNG = htmlspecialchars($_POST['LNG']);
            $Image = htmlspecialchars($_POST['Image']);
            $Pays = htmlspecialchars($_POST['Pays']);
            $Ville = htmlspecialchars($_POST['Ville']);
            $Link = htmlspecialchars($_POST['Link']);

            if(!empty($_POST['NomT']) AND !empty($_POST['NomM']) AND !empty($_POST['LAT']) AND !empty($_POST['LNG']) AND !empty($_POST['Image']) AND !empty($_POST['Pays']) AND !empty($_POST['Ville']) AND !empty($_POST['Link']))
            {
                $reqtable = $bdd->prepare("SHOW TABLES FROM bddmap LIKE ?");
				$reqtable->execute(array($NomT));
				$tablexist = $reqtable->rowCount();
				if($tablexist == 0)
				{
                    $cree= $bdd->prepare("CREATE TABLE $NomT (
                        ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        NOM VARCHAR(255) NOT NULL,
                        LAT FLOAT NOT NULL,
                        LNG FLOAT NOT NULL,
                        IMAGE TEXT NOT NULL,
                        PAYS VARCHAR(255) NOT NULL,
                        VILLE VARCHAR(255) NOT NULL,
                        LIEN VARCHAR(255) NOT NULL)");
                    $cree->execute();
                    $erreur = "Table créée";

				}
                    $reqNomM = $bdd->prepare("SELECT * FROM $NomT WHERE NOM= ?");
                    $reqNomM->execute(array($NomM));
                    $pseudoexist = $reqNomM->rowCount();
                    if($pseudoexist == 0)
                    {
                        $insert = $bdd->prepare("INSERT INTO $NomT(NOM,LAT,LNG,IMAGE,PAYS,VILLE,LIEN) VALUES(?,?,?,?,?,?,?)");
                        $insert->execute(array($NomM,$LAT,$LNG,$Image,$Pays,$Ville,$Link));
                    }
                    else{
                        $erreur= "Question existe !!";
                    }
            }
            else
            {
                    $erreur = "Tous les champs doivent etre remplis";
            }
        }
    ?>
