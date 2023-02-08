<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Page d'accueil";
        include('includes/head.php');
    ?>

    <body>
        <header>
            <nav class="nav_home">
                <div class="logo"><a href="index.php"><img src="logo_zoom.svg"></a></div>
                <div class="openMenu"><i class="fa fa-bars i_index"></i></div>
                <ul id="mainMenu">


                <div id="drop">

                <p class="dropbtn">Projets</p>
                <div class="drop_menu">
                <li class="dropdown-content"><a class="link-content" href="branding_page.php">Identitée visuelle</a></li>
                <li class="dropdown-content"><a class="link-content" href="motion_design_page.php">Motion design</a></li>
                <li class="dropdown-content"><a class="link-content" href="photographie_page.php">Photographie</a></li>
                <li class="dropdown-content"><a class="link-content" href="edition_page.php">Édition</a></li>
                <li class="dropdown-content"><a class="link-content" href="evenementiel_page.php">Évènementiel</a></li>
                </div>
                </div>

                
                <li><a href="">À propos</a></li>

                <li><a href="contact_page.php">Contact</a></li>
                <?php
                    if(isset($_SESSION['pseudo']) == "zoe.lavisse"){
                        echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                    }
                ?>
                
                <div id="closeMenu"><i class="fa fa-times"></i></div>
                <span class="icons">
                        <a href="https://www.facebook.com/zoom.production.tahiti"><img src="images/icons/facebook.svg" alt="facebook_logo"></a>
                        <a href="https://www.instagram.com/zoom.production.tahiti"><img src="images/icons/instagram.svg" alt="instagram_logo"></a>
                        <a href="https://www.linkedin.com/company/zoom-production-tahiti"><img src="images/icons/linkedin.svg" alt="linkedin_logo"></a>
                        <a href="https://www.tiktok.com/@zoom.production.tahiti?_t=8W7KbwLNMbS&_r=1"><img src="images/icons/tiktok.svg" alt="tiktok_logo"></a>
                    </span>
                </ul>
            </nav>
        </header>
        
        <div class="hero">
            

            <video src="teaser.mp4" muted loop autoplay type="video/mp4"></video>
            
            
        
    </div>
    
    <ul class="social">
        <li><a href="https://www.facebook.com/zoom.production.tahiti"><img src="images/icons/facebook.svg" alt="facebook_icon"></a></li>
        <li><a href="https://www.instagram.com/zoom.production.tahiti"><img src="images/icons/instagram.svg" alt="instagram_icon"></a></li>
        <li><a href="https://www.linkedin.com/company/zoom-production-tahiti"><img src="images/icons/linkedin.svg" alt="linkedin_icon"></a></li>
        <li><a href="https://www.tiktok.com/@zoom.production.tahiti?_t=8W7KbwLNMbS&_r=1"><img src="images/icons/tiktok.svg" alt="tiktok_icon"></a></li>

    </ul>

       
    </body>
    <script src="js/script.js"></script>

</html>


