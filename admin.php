<!DOCTYPE html>

<html lang="en">

    <?php
        include('includes/head.php');
    ?>

    <body>
        <header>
            <nav>
                <div class="logo"><a href="index.php"><img src="Zoom Production logo.svg"></a></div>
            </nav>
        </header>
        

        <div class="main">

        <div>
            <p>Connexion administrateur</p>

            <form action="admin_connexion.php" method="POST"  enctype="multipart/form-data">

                <div>
                <label>Utilisateur :</label>
                <input type="text" name="pseudo">
                </div>

                <div>
                <label>Mot de passe :</label>
                <input type="password" name="password">
                </div>

                <div>
                <input type="submit" name="submit" value="Connexion">
                </div>

            

            </form>

        </div>
        <?php

        ?>

<script src="js/script.js"></script>

    </body>

</html>