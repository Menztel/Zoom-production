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

                <a href="">
                    <img src="images/icons/logout-icon.svg" alt="log out">
                    Déconnexion
                </a>

            </div>


            <div id="main-container"></div>


            <div id="right-container">
                <div id="profil-content">   </div>
            </div>
    
        </div>
     </body>
    <script src="js/script.js"></script>

</html>

