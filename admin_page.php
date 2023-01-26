<?php
    session_start();
    // Ne pas oublier de changer le nom des classes 
?>

<!DOCTYPE html>

<html>
    	<?php
            include("includes/head.php");
        ?>

    <body>
    
        <div id="dashboard">

            <div id="left-container">
                <img src="logo_zoom.svg" alt="logo Zoom">
                

                <div id="menu">
                    
                    <button class="link">
                        <img src="images/icons/dashboard-icon.svg" alt="dashboard">
                        Dashboard
                    </button>    

                    <button class="link">
                        <img src="images/icons/add-icon.svg" alt="add">
                        Ajouter
                    </button>
                
                    

                    <div id="delete-section">
                        <button>
                            <img src="images/icons/delete-icon.svg" alt="delete"> 
                        Supprimer
                        </button>

                        <select name="page-name-project" id="filter-page">
                            <option value="Photographie">Photographie</option>
                            <option value="Motion design">Motion design</option>
                            <option value="Illustration">Illustration</option>
                            <option value="Édition">Édition</option>
                            <option value="Évènementiel">Évènementiel</option>
                        </select>
                    </div>

                </div>

                <a href="includes/deconnexion.php">
                    <img src="images/icons/logout-icon.svg" alt="log out">
                    Déconnexion
                </a>

            </div>


            <div id="main-container">

                <div id="main-text">
                    <h2>Bienvenue Zoe !</h2>
                    <p>Ici tu trouveras tous les outils et fonctionnalités qui pourront t'aider à intégrer tes projets mais aussi à les modifier et supprimer à tout moment.</p>
                    <p>N'hésite pas à me contacter si tu es perdue après tout, tu es la soeur de Heidi donc je me méfie ;)</p>
                    <p>Je vais te préparer un moyen de me contacter directement de ce dashboard par mail (plus tard)</p>
                </div>
                
                <div id="project">
                    
                    <p>Ajouter un projet</p>
                    
                    <form id="add-form" action="project_integration/create_project.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="project-title">
                        <select name="page-name-project" id="select-page">
                            <option value="Photographie">Photographie</option>
                            <option value="Motion design">Motion design</option>
                            <option value="Illustration">Illustration</option>
                            <option value="Édition">Édition</option>
                            <option value="Évènementiel">Évènementiel</option>
                        </select>
                        <input type="file" name="project-image" id="file">
                        <button type="submit" name="addForm-button">Envoyer</button>
                    </form>
                   
                </div>

                <div id="annexe">

                    <p>Ajouter une annexe</p>
                    <form action="project_integration/create_annexe.php" method="POST" enctype="multipart/form-data">

                    <?php
                    
                        include('includes/bdd.php');

                        $q = 'SELECT title FROM project';
                        $statement = $bdd->query($q);
                        

                        if($statement){
                            
                            $projectsTitle = $statement->fetchALL(PDO::FETCH_ASSOC);
                            
                            echo '<select name="project-name-annexe">';

                                foreach($projectsTitle as $title){
                        
                                     echo '<option value="' . $title['title'] . '">' . $title['title'] . '</option>';  
                                    };  

                            echo '</select>';
                                  
                            };
                    
                    ?>

                    <input type="text" name="subtitle" placeholder="sous-titre">
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                    <input type="file" name="uploads[]" id="multi-file" multiple>
                    <!--<label for="multi-file">Choisi plusieurs images</label>-->
                    <button type="submit" name="add-annexe">Envoyer</button>
                    </form>
                    
                
                </div>

                <div id="modif-container">
                            
                </div>
                
                <div id="delete">
                
                    <h2 id="state_project">Tous les projets</h2>

                    <div id="delete-container">
                        <?php
                        
                            $src = '';
                            $q = 'SELECT id, title, image, page_name FROM project';
                            $req = $bdd->query($q);
                            if($req !== false) {
                                $projects = $req->fetchALL(PDO::FETCH_ASSOC);

                                
                                foreach($projects as $project) {
                                    echo '<div id="'. $project['title'] .'" class="'."box-admin" . " " . $project['id'] .'" onclick="fetchIdProject(this.id)">';
                                    
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
                    
                        ?>
                        
                    </div>

                </div>
                

            </div>


            <div id="right-container">
                <div id="profil-content">
                    <img src="assets/avatar.png" alt="avatar">
                    <p>Zoe Lavisse</p>
                    <p>Graphiste</p>
                </div>
            </div>
    
        </div>
     </body>
    <script src="js/script.js"></script>

</html>

