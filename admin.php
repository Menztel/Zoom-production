<!DOCTYPE html>

<html lang="en">

    <?php
        $title = "Page d'authenfication";
        include("includes/head.php");
        
    ?>

    <body>

        <form id="login-form" action="admin_connexion.php" method="POST"  enctype="multipart/form-data">
            
            <div><a href="index.php"><img src="images/icons/arrow-left.svg" alt="logout arrow"></a></div>
            <h3>Se connecter</h3>
        
            <label for="utilisateur">Utilisateur</label>
            <input id="utilisateur" type="text" name="pseudo" placeholder="Nom d'utilisateur">

            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Mot de passe">
        
            <input type="submit" name="submit" value="Connexion">
            
        </form>

        
<script src="js/script.js"></script>

    </body>

</html>