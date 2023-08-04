<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Page d'accueil";
        include('includes/head.php');
        include('includes/bdd.php');
    ?>

    <body>
        <?php
            include('includes/header.php');
        ?>
    <div class="main-content">
        <div class="page-title">
            <h1>Projets</h1>
            <span></span>
        </div>
        <div class="cards">
            <?php

            $q = 'SELECT id, title, image, page_name FROM project';
            $req = $bdd->query($q);
            if($req !== false) {
                $projects = $req->fetchALL(PDO::FETCH_ASSOC);

                foreach($projects as $project) {
                if($project['page_name'] == "Identitée visuelle"){
                    $path = 'images/photographie/';
                }
                if($project['page_name'] == "Motion design"){
                    $path = 'images/motion_design/';
                }
                if($project['page_name'] == "Social media"){
                    $path = 'images/edition/';
                }
                if($project['page_name'] == "Évènementiel"){
                    $path = 'images/evenementiel/';
                }
                    echo '<a href="model.php?id=' . $project['id'] . '">';
                    echo '<div class="box stacked">';
                        echo '<div class="imgBox">' . '<img src=' . $path . $project['image'] . '>' . '</div>';
                        echo '<div class="voile">';
                        echo '<div class="overlay">' . '<span>' . strtoupper($project['title'])  . '</span>' . '</div>';
                        echo '</div>';
                        echo '<div class="colorBox">' . '</div>';
                    echo '</div>';
                    echo'</a>'; 
                }
            }
            else {echo "Erreur de préparation de la requête";}
            ?>        
        </div>
    </div>
    <?php
      include('includes/footer.php');
    ?>
    </body>
    <script src="js/script.js"></script>
</html>