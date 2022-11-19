<?php
    session_start();
    // Ne pas oublier de changer le nom des classes 
?>

<!DOCTYPE html>

<html>
    <p>Test branch</p>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/admin_sheet.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    </head>

    <body> 
    <button type="button" class="burger" onclick="toggleSidebar()">
        <img class="burger-avatar" src="./assets/avatar.png" />
        <span class="burger-icon"></span>
    </button>
    <div class="overlay"></div>
    <aside class="sidebar">
        <img class="sidebar-avatar" src="./assets/avatar.png" />
        <div class="sidebar-username">Zoé Lavisse</div>
        <div class="sidebar-role">Graphiste</div>
        <nav class="sidebar-menu">
            <button type="button">
                <img src="./assets/home.png" />
                    <span>Ajouter</span>
            </button>
            <button type="button">
                <img src="./assets/settings.png" />
                    <span>Supprimer</span>
            </button>
            <button type="button">
                <img src="./assets/account.png" />
                    <span>Modifier</span>
            </button>
        </nav>
        <nav class="sidebar-menu bottom">
            <button type="button">
                <img src="./assets/logout.png" />
                <a href="includes/deconnexion.php">

                    <span>Déconnexion</span>
                </a>
            </button>
        </nav>
    </aside>

    <div class="logo"><a href="index.php"><img src="logo_zoom.svg" alt="logo_Zoom"></a></div>

    <div class="glassmorph-dashboard">
        <div class="contact-container">
            <div class="circle-profil">
                <img src="" alt="">
            </div>
            <div class="profil-container">
                <p id="name">Lavisse Zoé</p>
                <p id="job">Graphiste</p>
            </div>
            <div class="link-container">
                <a href="">
                    <img src="" alt="Add">
                    <p>Ajouter un projet</p>
                </a>
                <a href="">
                    <img src="" alt="Modif">
                    <p>Modifier un projet</p>
                </a>
                <a href="">
                    <img src="" alt="Delete">
                    <p>Supprimer un projet</p>
                </a>
            </div>
            <div class="social-container"></div>
        </div>
        <div class="text-container">
            <h1>Bonjour Zoé</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, voluptate illum provident in quas hic laudantium sint quidem, tenetur debitis quisquam quasi dicta libero, optio quam animi. Magnam, officia laboriosam!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam ipsum animi necessitatibus saepe illo. Atque quas aut optio eligendi, nesciunt, in vitae adipisci quidem officia voluptas molestiae ullam culpa similique.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio nesciunt itaque numquam ex, laborum quibusdam sit? Porro magni ad autem quas velit sit omnis culpa accusamus, dolorum impedit laboriosam reiciendis!</p>
        </div>
        
        </div>
        <!--<div id="admin_background">
            <<P>Page admin</p>
            <div class="addBox">
                <button onclick="showForm()" class="addButton">+</button>
                <div id="formDiv">
                    <button onclick="removeForm()" id="removeForm">X</button>
                    <form id="addForm" method="POST" action="project_integration/create_project.php" enctype="multipart/form-data">
                        <div id="file-input">
                            <input type="file" id="file" name="project-image">
                            <label for="file">Choisir votre image</label>
                        </div>
                            <select id="addForm-page-name" class="addForm-select" name="page-name-project">
                                <option value="Branding">Branding</option>
                                <option value="Photographie">Photographie</option>
                                <option value="Motion design">Motion design</option>
                                <option value="Illustration">Illustration</option>
                                <option value="Edition">Edition</option>
                                <option value="Evenementiel">Evenementiel</option>
                            </select>
                            <input type="text" id="addForm-title" class="addForm-input" name="title-project" placeholder="Ajouter le titre du projet">
                            <button type="submit" id="addForm-button" name="addForm-button">Enregistrer</button>
                    </form>
                </div>
            </div>
           
        </div>-->

        <script src="js/script.js"></script>
    </body>

</html>