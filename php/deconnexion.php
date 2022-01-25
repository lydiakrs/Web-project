
<?php
        session_start();
        $_SESSION = array();//vide le tableeau
        session_destroy();//detruit la session
        header("Location: ../html/accueil.php");//et redirige dans la page d'acceuil
?>
