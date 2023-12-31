<!DOCTYPE html>
<html lang="en">
<?php
$title = "Page évènementiel";
  include('includes/head.php');
  include('includes/bdd.php');
?>
<body>
  <?php
    include('includes/header.php');
  ?>
    <div class="main-content">
      <div class="page-title">
        <h1>Évènementiel</h1>
        <span></span>
      </div>
      <div class="cards">

      <?php
        $q = 'SELECT title, image, page_name FROM project';
        $req = $bdd->query($q);
        if($req !== false) {
            $projects = $req->fetchALL(PDO::FETCH_ASSOC);
            foreach($projects as $project) {
              if($project['page_name'] == "Evenementiel"){
                echo '<a href="model.php?id=' . $project['id'] . '">';
                  echo '<div class="box stacked">';
                    echo '<div class="imgBox">' . '<img src="images/evenementiel/' . $project['image'] . '">' . '</div>';
                    echo '<div class="voile">';
                    echo '<div class="overlay">' . '<span>' . $project['title']  . '</span>' . '</div>';
                    echo '</div>';
                    echo '<div class="colorBox">' . '</div>';
                  echo '</div>';
                echo'</a>';
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

