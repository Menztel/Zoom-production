<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Page d'accueil";
        include('includes/head.php');
    ?>

    <body>
        <header>
            <nav class="nav_home" id="nav">
                <div class="logo"><a href="index.php"><img src="logo_zoom.svg" alt="logo_Zoom"></a></div>
                <div class="openMenu"><i class="fa fa-bars"></i></div>
                <ul class="mainMenu">
                    <li><a href="branding_page.php">Identitée visuelle</a></li>
                    <li><a href="photographie_page.php">Photographie</a></li>
                    <li><a href="motion_design_page.php">Motion design</a></li>
                    <li><a href="illustration_page.php">Illustration</a></li>
                    <li><a href="edition_page.php">Édition</a></li>
                    <li><a href="evenementiel_page.php">Évènementiel</a></li>
                    <li><a href="contact_page.php">Contact</a></li>
                    <?php
                        if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] == "zoe.lavisse"){
                            echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                        }
                    ?>
                    
                    <div class="closeMenu"><i class="fa fa-times"></i></div>
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

        <script src="js/script.js"></script>
    </body>

</html>


