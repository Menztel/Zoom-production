<!DOCTYPE html>
<html lang="en">
<?php
  include('includes/head.php');
  include('includes/bdd.php');
?>
<body>
  <?php
    include('includes/header.php');
  ?>
    <div id="main-illustration" class="main-content">
      <div id="cards-illustration" class="cards">

        <?php

          $q = 'SELECT id, title, image, page_name FROM project';
          $req = $bdd->query($q);
          if($req !== false) {
              $projects = $req->fetchALL(PDO::FETCH_ASSOC);


              foreach($projects as $project) {
                if($project['page_name'] == "Illustration"){
                  echo '<div class="box">';
                      echo '<div class="imgBox">' . '<img src="images/illustration/' . $project['image'] . '">' . '</div>';
                      echo '<div class="voile">';
                      echo '<div class="overlay">' . '<span>' . $project['title']  . '</span>' . '</div>';
                      echo '</div>';
                      echo '<div class="colorBox">' . '</div>';
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
