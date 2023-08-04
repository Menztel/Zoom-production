<header>
        <nav class="navbar">
            <div class="logo"><a href="index.php"><img src="logo_zoom.svg"></a></div>
            <ul>
                <li>
                    <a href="index.php">Projets</a>
                    <ul class="dropdown">
                        <li class="dropdown-content"><a class="link-content" href="branding_page.php">Identitée Visuelle</a></li>
                        <li class="dropdown-content"><a class="link-content" href="motion_design_page.php">Motion Design</a></li>
                        <li class="dropdown-content"><a class="link-content" href="evenementiel_page.php">Évènementiel</a></li>
                        <li class="dropdown-content"><a class="link-content" href="social_media_page.php">Social Media</a></li>
                    </ul>
                </li>
                <li><a href="">À propos</a></li>
                <li><a href="contact_page.php">Contact</a></li>
            <?php
                if(isset($_SESSION['pseudo']) == "zoe.lavisse"){
                    echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                }
            ?>
            </ul>
        </nav>
</header>
