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

/* INSCRIPTION CHECK */


    /*if(isset($_POST['submit'])) {

    // SI les champs sont vides

    if(empty($_POST['pseudo']) || empty($_POST['password'])) {
        header('location: index.php');
        exit;
    }


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = hash('sha512', $_POST['password']);
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $q = 'INSERT INTO user(pseudo, password) VALUES (:pseudo, :password)';
        $req = $bdd->prepare($q);
        $result = $req->execute([
                                    'pseudo' => $pseudo,
                                    'password' => $password
        ]);
    }
    if(!$result) {
        header('location: index.php');
        exit;
    }
    else {
        header('location: admin_page.php');
    }

    }*/



    

?>