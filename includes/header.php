<header>
        <nav class="navbar">
            <div class="logo"><a href="index.php"><img src="logo_zoom.svg"></a></div>
            <div id="openMenu"><i class="fa fa-bars"></i></div>
            <ul id="mainMenu">

            <li><a href="">À propos</a></li>
            <div id="drop">

            <p class="dropbtn">Projets</p>
            <!--<img id="right_chevron" src="images/icons/right_chevron.png" alt="right chevron">-->
            <div class="drop_menu">
            <li class="dropdown-content"><a class="link-content" href="branding_page.php">Identitée visuelle</a></li>
            <li class="dropdown-content"><a class="link-content" href="motion_design_page.php">Motion design</a></li>
            <li class="dropdown-content"><a class="link-content" href="photographie_page.php">Photographie</a></li>
            <li class="dropdown-content"><a class="link-content" href="edition_page.php">Édition</a></li>
            <li class="dropdown-content"><a class="link-content" href="evenementiel_page.php">Évènementiel</a></li>
            </div>
            </div>

            

            
            <li><a href="contact_page.php">Contact</a></li>
            <?php
                if(isset($_SESSION['pseudo']) == "zoe.lavisse"){
                    echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                }
            ?>
            
            <div id="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons inverse">
                    <a href="https://www.facebook.com/zoom.production.tahiti"><img src="images/icons/facebook.svg" alt="facebook_logo"></a>
                    <a href="https://www.instagram.com/zoom.production.tahiti"><img src="images/icons/instagram.svg" alt="instagram_logo"></a>
                    <a href="https://www.linkedin.com/company/zoom-production-tahiti"><img src="images/icons/linkedin.svg" alt="linkedin_logo"></a>
                    <a href="https://www.tiktok.com/@zoom.production.tahiti?_t=8W7KbwLNMbS&_r=1"><img src="images/icons/tiktok.svg" alt="tiktok_logo"></a>
                </span>
            </ul>
        </nav>
</header>