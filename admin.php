<!DOCTYPE html>

<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/admin_sheet.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    </head>

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