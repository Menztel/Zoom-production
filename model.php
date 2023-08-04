<!DOCTYPE html>
<html lang="en">
    <?php
        include('includes/head.php');
        include('includes/bdd.php');
    ?>
<body id="model-page">
    <?php
         include('includes/header.php');
    ?>
    <div class="main-content model-content">

    <?php

        // Get the id of clicked project 
        $id = $_GET['id'];
        
        // Inner join to fetch the right annexe(subtitle, description) and project(title) with id project

        $q = "SELECT project.title, subtitle, description FROM annexe INNER JOIN project ON project.id = annexe.id_project WHERE project.id = $id";
        $req = $bdd->query($q);
        if($req != false)
        {
            $result = $req->fetch(PDO::FETCH_ASSOC);
            if($result)
            {
                echo '<h1>' . $result['title'] . '</h1>';
                echo '<span>' . '</span>';
                echo '<h3>' . $result['subtitle'] . '</h3>';
                echo '<p>' . $result['description'] . '</p>';
             }
        }
            

       
        
    ?>

    <div class="gallery-annexes-content">
        <?php
        
            $q = "SELECT name FROM images INNER JOIN annexe ON annexe.id = images.id_annexe WHERE annexe.id_project = $id";
            $req = $bdd->query($q);
            if($req != false)
            {
                $images = $req->fetchAll(PDO::FETCH_ASSOC);
                
                if($images)
                {
                    foreach($images as $image)
                    {
                        echo '<img src="images/annexes/' . $result['title'] .'/' . $image['name'] .'"' . '>';
                    }
                } 
            }
            
        ?>
    </div>
    <div id="up-link">
    <span id="up-arrow"><a href="#model-page"><img src="images/icons/up_arrow.png" alt="up-arrow"></a></span>
    <p>Cliquez pour remonter</p>
    </div>
    </div>
    <script src="js/script.js"></script>
</body>
<?php
    include('includes/footer.php');
?>
</html>