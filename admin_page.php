<?php
    session_start();
    // Ne pas oublier de changer le nom des classes 
?>

<!DOCTYPE html>

<html>
    	<?php
            include("includes/head.php");
        ?>

    <body class="body-gradient">
    

        <?php
            include('includes/header.php');
        ?>
        <div class="main-content" id="admin-content">


            <div class="glassmorph-dashboard">
                <div class="profil-container">
                    <div class="circle-profil">
                        <img src="./assets/avatar.png" alt="profil picture">
                    </div>
                    <div class="id-container">
                        <p id="name">Lavisse Zoé</p>
                        <p id="job">Graphiste</p>
                    </div>
                    <div class="link-container">
                        <button class="menu-button" onclick="">
                            <img src="images/icons/add-icon.svg" alt="Add">
                            <p>Ajouter</p>
                        </button>
                        <button class="menu-button" onclick="">
                            <img src="images/icons/modif-icon.svg" alt="Modif">
                            <p>Modifier</p>
                        </button>
                        <button class="menu-button" onclick="">
                            <img src="images/icons/delete-icon.svg" alt="Delete">
                            <p>Supprimer</p>
                        </button>
                        
                        <a href="includes/deconnexion.php">
                            <img src="images/icons/logout-icon.png" alt="Log out">
                            <p>Déconnexion</p>
                        </a>

                    </div>
                </div>
                <div id="text-container">
                    <h1>Bonjour Zoé !</h1>
                    <p>Bienvenue sur ton panneau  d'administrateur.<br>
                        D'ici tu pourras gérer l'intégration, la modification et la suppression des différents projets.
                    </p>
                    <p>
                        Il te suffit de cliquer sur ajouter, modifier ou supprimer pour pouvoir le faire.<br>Rien de plus simple !
                    </p>
                    <p>
                        Un formulaire te sera présenté pour chaque action, remplis-le et laisse la magie de l'informatique opérer ;)
                    </p>
                </div>

                
                <div id="add">

                    <div id="add-project">
                        
                        <div class="text-conf">
                            <h2>Ajouter un projet</h2>
                            <span></span>
                        </div>

                        <form action="">

                            <div id="project-name">
                                <input type="text" name="project-title">
                                <label for="project-title">Nom du projet</label>
                            </div>
                            
                            <select name="page-name-project" id="">
                                <option value="Branding">Branding</option>
                                <option value="Photographie">Photographie</option>
                                <option value="Motion design">Motion design</option>
                                <option value="Illustration">Illustration</option>
                                <option value="Edition">Edition</option>
                                <option value="Evenementiel">Evenementiel</option>
                            </select>
                        

                            <div class="input-images">
                            <input id="project-image" type="file" name="project-image" multiple>
                            <label for="project-image"><i><img src="images/icons/choose-image.png" alt="choose image"></i>Choisi ton image</label>
                            
                            </div>

                            <button type="submit" name="addForm-button">Envoyer</button>
                        </form>

                        

                        <button onclick="removeAddProject()" id="removeAddProject">Retour au Dashboard</button>
                        </div>

                        <div id="add-annexe-project">
                            
                            <form action="">
            
                                <input type="file" name="project-image-annexe" title="">
                                <textarea name="text-annexe" id="" cols="30" rows="5"></textarea>
            
                            </form>
                        </div>
            
                </div>

                    

                   
            </div>
        </div>
        
       
    <?php
        include('includes/footer.php');
    ?>
     </body>
    <script src="js/script.js"></script>

</html>

