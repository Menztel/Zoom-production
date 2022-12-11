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
                
                <div id="project">
                    
                    <p>Ajouter un projet</p>
                    
                    <form id="add-form" action="project_integration/create_project.php" method="POST">
                        <input type="text" name="project-title">
                        <select name="page-name-project" id="select-page">
                            <option value="">Photographie</option>
                            <option value="">Motion design</option>
                            <option value="">Illustration</option>
                            <option value="">Édition</option>
                            <option value="">Évènementiel</option>
                        </select>
                        <input type="file" name="project-image" id="file">
                        <input type="submit" name="addForm-button" value="Envoyer">
                    </form>
                   
                </div>

                <div id="annexe">

                    <p>Ajouter une annexe</p>

                    <input type="text" placeholder="sous-titre">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <label for="multi-file">Choisi plusieurs images</label>
                    <input type="file" name="" id="multi-file">
                
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

