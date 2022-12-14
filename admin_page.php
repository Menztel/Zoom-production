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
                
                
                    <button class="link">
                        <img src="images/icons/modif-icon.svg" alt="modify">
                        Modifier
                    </button>
                

                
                    <button class="link">
                        <img src="images/icons/delete-icon.svg" alt="delete">
                        Supprimer
                    </button>
                    

                    <div id="project-container">
                        <button>
                            <img src="images/icons/project-icon.png" alt="project"> 
                        Projets
                        </button>
                        <ul>
                            <li>
                                <a href="">Photographie</a>
                            </li>
                            <li>
                                <a href="">Motion design</a>
                            </li>
                            <li>
                                <a href="">Illustration</a>
                            </li>
                            <li>
                                <a href="">Édition</a>
                            </li>
                            <li>
                                <a href="">Évènementiel</a>
                            </li>
                        </ul>
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

