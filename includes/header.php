<header>
        <nav class="navbar">
            <div class="logo"><a href="index.php"><img src="logo_zoom.svg"></a></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">


    
            <button class="dropbtn">Projets <img id="arrow" src="images/icons/right_chevron.png" alt="right chevron"></button>
            

            <li class="dropdown-content"><a href="branding_page.php">Identitée visuelle</a></li>
            <li class="dropdown-content"><a href="photographie_page.php">Photographie</a></li>
            <li class="dropdown-content"><a href="motion_design_page.php">Motion design</a></li>
            <li class="dropdown-content"><a href="illustration_page.php">Illustration</a></li>
            <li class="dropdown-content"><a href="edition_page.php">Édition</a></li>
            <li class="dropdown-content"><a href="evenementiel_page.php">Évènementiel</a></li>

            </div>

            

            <li><a href="evenementiel_page.php">À propos</a></li>
            <li><a href="contact_page.php">Contact</a></li>
            <?php
                if(isset($_SESSION['pseudo']) == "zoe.lavisse"){
                    echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                }
            ?>
            
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons">
                    <a href="https://www.facebook.com/zoom.production.tahiti"><img src="images/icons/facebook.svg" alt="facebook_logo"></a>
                    <a href="https://www.instagram.com/zoom.production.tahiti"><img src="images/icons/instagram.svg" alt="instagram_logo"></a>
                    <a href="https://www.linkedin.com/company/zoom-production-tahiti"><img src="images/icons/linkedin.svg" alt="linkedin_logo"></a>
                </span>
            </ul>
        </nav>
</header>

<script src="js/script.js"></script>