
<?php
session_start();
        require_once('connexion.php');
        if(isset($_POST['Connect']))
        {
            $Pseudoco = htmlspecialchars($_POST['Pseudoco']);
            $Pw = md5($_POST['Pw']);
            if(!empty($Pseudoco) AND !empty($Pw))
            {
                $requser = $bdd->prepare("SELECT * FROM user WHERE PSEUDO = ? AND MDP = ?");
                $requser->execute(array($Pseudoco, $Pw));
                $userexist = $requser->rowCount();
                if($userexist == 1)
                {
                        $userinfo = $requser->fetch();
                        $_SESSION['ID'] = $userinfo['ID'];
                        $_SESSION['PSEUDO'] = $userinfo['PSEUDO'];
                        $_SESSION['MAIL'] = $userinfo['MAIL'];
                        header("Location: profil.php");

                }
                else
                {
                    $erreur = "Pseudo et/ou Mot de passe erronés";
                }
            }
            else
            {
                $erreur = "Tous les champs doivent être complétés";
            }
        }



?>

