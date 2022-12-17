<!DOCTYPE html>
<html lang="en">
    <?php
        include('includes/head.php');
    ?>
<body id="model-page">
    <?php
         include('includes/header.php');

        include('includes/bdd.php');


        $q = 'SELECT * FROM project JOIN annexe ON project.id = annexe.id_project';
        $statement = $bdd->query($q);

        if($statement != false)
        {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        var_dump($result);
    ?>
    <div class="main-content model-content">
    <h1>TITRE DU PROJET</h1>
    <span></span>
    <h3>SOUS TITRE DU PROJET</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit obcaecati ex aliquam maiores! Sapiente, ipsum. Quis quia nam numquam dignissimos. Ullam consequuntur, quos neque perspiciatis non assumenda officia itaque sint?
        
    </p>
    <div class="gallery-annexes-content">
        <img src="images/annexes/neon_body/image_1.jpg" alt="">
        <img src="images/annexes/neon_body/image_2.jpg" alt="">
        <img src="images/annexes/neon_body/image_3.jpg" alt="">
    
    </div>
    <div id="up-link">
    <span id="up-arrow"><a href="#model-page"><img src="images/icons/up_arrow.png" alt="up-arrow"></a></span>
    <p>Cliquez pour remonter</p>
    </div>
    </div>
    
</body>
<?php
    include('includes/footer.php');
?>
</html>