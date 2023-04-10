<!DOCTYPE html>
<html lang="en">
<?php
$title = "Page motion design";
  include('includes/head.php');
  include('includes/bdd.php');
?>
<body>
  <?php
    include('includes/header.php');
  ?>
    <div id="main-motion-design" class="main-content">
      <div class="page-title">
        <h1>Motion design</h1>
        <span></span>
      </div>
      <div id="cards-motion-design" class="cards">

        <?php

        $q = 'SELECT title, image, page_name FROM project';
        $req = $bdd->query($q);
        if($req !== false) {
            $projects = $req->fetchALL(PDO::FETCH_ASSOC);


            foreach($projects as $project) {
              if($project['page_name'] == "Motion design"){
                echo '<div id="box" class="box">';
                echo '<a href="model.php?id=' . $project['id'] . '">';
                    echo '<div class="imgBox">' . '<img src="images/motion_design/' . $project['image'] . '">' . '</div>';
                    echo '<div class="voile">';
                    echo '<div class="overlay">' . '<span>' . $project['title']  . '</span>' . '</div>';
                    echo '</div>';
                    echo '<div class="colorBox">' . '</div>';
                  echo '</a>';
                echo '</div>';
              }  
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

