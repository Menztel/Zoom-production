<!DOCTYPE html>
<html>
<?php
$title = "Page photographie";
  include('includes/head.php');
  include('includes/bdd.php');
?>
<body>
  <?php
    include('includes/header.php');
  ?>
    <div id="main-photographie" class="main-content">
      <div class="page-title">
        <h1>Photographie</h1>
        <span></span>
      </div>
      
      <div id="cards-photographie" class="cards">
        <?php

          

          $q = 'SELECT id, title, image, page_name FROM project';
          $req = $bdd->query($q);
          if($req !== false) {
              $projects = $req->fetchALL(PDO::FETCH_ASSOC);
    

              foreach($projects as $project) {
                if($project['page_name'] == "Photographie"){
                  echo '<a href="model.php?id=' . $project['id'] . '">';
                    echo '<div class="box stacked">';
                      echo '<div class="imgBox">' . '<img src="images/photographie/' . $project['image'] . '">' . '</div>';
                      echo '<div class="overlay">' . '<span>' . $project['title']  . '</span>' . '</div>';
                      echo '<div class="colorBox">' . '</div>';
                    echo '</div>';
                  echo '</a>';
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

