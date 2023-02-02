<!DOCTYPE html>
    <html>
        <?php
        $title = "Page contact";
            include('includes/head.php');
        ?>

        <body>
            <?php
                include('includes/header.php');
            ?>
            
            <section>
                <div class="contact-container">
                    <div class="contactInfo">
                        <div>
                            <h2>Contact Info</h2>
                            <ul class="info">
                                <li>
                                    <span><img src="images/icons/localisation.png" alt="localisation icon"></span>
                                    <span>
                                        Papeete, Îles du Vent, Polynésie française
                                    </span>
                                </li>
                                <li>
                                    <span><img src="images/icons/mail.png" alt="mail icon"></span>
                                    <span>
                                        contact@zoom-prod.com
                                    </span>
                                </li>
                                <li>
                                    <span><img src="images/icons/telephone.png" alt="telephone icon"></span>
                                    <span>
                                        +689 87 79 98 91
                                    </span>
                                </li> 
                            </ul>
                        </div>
                        <!--<ul class="sci">
                        <li>
                            <a href="#"><img src="images/icons/facebook.svg" alt="facebook icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/icons/instagram.svg" alt="instagram icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/icons/linkedin.svg" alt="linkedin icon"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/icons/tiktok.svg" alt="tiktok icon"></a>
                        </li>
                        </ul>-->
                    </div>
                    
                    <div class="contactForm">
                        <h2>Envoyer un message</h2>
                        <div class="formBox">
                            <div class="inputBox w50">
                                <input type="text" required>
                                <span>Nom</span>
                            </div>

                            <div class="inputBox w50">
                                <input type="text" required>
                                <span>Prénom</span>
                            </div>

                            <div class="inputBox w50">
                                <input type="email" required>
                                <span>Adresse mail</span>
                            </div>

                            <div class="inputBox w50">
                                <input type="text" required>
                                <span>Téléphone</span>
                            </div>

                            <div class="inputBox w100">
                                <textarea required></textarea>
                                <span>Écrivez votre message ici...</span>
                            </div>

                            <div class="inputBox w100">
                                <input type="submit" value="Envoyer">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        <?php
            include('includes/footer.php');
        ?>
    </html>