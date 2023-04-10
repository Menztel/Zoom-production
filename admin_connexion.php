<?php

    include('includes/bdd.php');

    session_start();

/* CONNEXION CHECK */

    if(isset($_POST['submit'])) {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = hash('sha512', $_POST['password']);
            if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
                $q = 'SELECT pseudo, password FROM user WHERE pseudo = ? && password= ?';
                $req = $bdd->prepare($q);
                $req->execute(array($pseudo, $password));
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                    if(count($result) > 0) {
                        $_SESSION['pseudo'] = $pseudo;
                        $_SESSION['password'] = $password;
                        header('location: admin_page.php');
                        exit;                    
                    }
            
            else{
                echo "Tu t'es trompé !";
            };
            };
    };
?>