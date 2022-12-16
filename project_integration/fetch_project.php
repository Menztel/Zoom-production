<?php

    include('../includes/bdd.php');
  

    if(isset($_POST['request'])){
        
        $request = $_POST['request'];
        $src = '';
        $q = "SELECT title, image, page_name FROM project WHERE page_name = '$request'";
        $req = $bdd->query($q);
        if($req !== false) {
            $projects = $req->fetchALL(PDO::FETCH_ASSOC);

            
            foreach($projects as $project) {
                echo '<div class="box-admin">';
                
                // Optimisation (Changer le nom des pages pour mettre en minuscule)

                /*$name = ['Photographie', 'Motion design', 'Illustration', "Édition", "Évènementiel"];
                $src = '';
                for($i = 0; $i < count($name); $i++){
                    if($project['page_name'] == $name[$i])
                    {
                        $src = 'images/' . strtolower($project['name']) .''
                    }
                }*/
                
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