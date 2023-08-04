<?php
    include('../includes/bdd.php');
  
    if(isset($_POST['request'])){
        
        $request = $_POST['request'];
        $src = '';
        $q = "SELECT id, title, image, page_name FROM project WHERE page_name = '$request'";
        $req = $bdd->query($q);
        if($req !== false) {
            $projects = $req->fetchALL(PDO::FETCH_ASSOC);
  
            foreach($projects as $project) {
                
                //replace all space in the string by ''
                $newId = str_replace(' ', '', $project['title']);
                echo '<div id="'. $newId .'" class="'."box-admin" . " " . $project['id'] .'" onclick="fetchIdProject(this.id)">';
                
                if($project['page_name'] == 'Photographie')
                {
                    $src = 'images/photographie/' . $project['image'] .'';
                };

                if($project['page_name'] == 'Motion design')
                {
                    $src = 'images/motion_design/' . $project['image'] .''; 
                }
                
                if($project['page_name'] == 'Illustration')
                {
                    $src = 'images/illustration/' . $project['image'] .''; 
                }

                if($project['page_name'] == "Édition")
                {
                    $src = 'images/edition/' . $project['image'] .''; 
                }

                if($project['page_name'] == "Évènementiel")
                {
                    $src = 'images/evenementiel/' . $project['image'] .''; 
                }
                
                    echo '<div class="imgBox-admin">' . '<img src="' . $src .'">' . '</div>';
                    echo '<div class="voile-admin">';
                    echo '<div class="overlay-admin">' . '<span>' . $project['title']  . '</span>' . '</div>';
                    echo '</div>';

                echo '</div>'; 
            }
        }
        else {echo "Erreur de préparation de la requête";}
    }
?>