<?php
    
    
    if(isset($_GET['message']) && !empty($_GET['message']) && isset($_GET['type']))
    {
        $message = $_GET['message'];
        echo '<div id="message" class="alert-' . htmlspecialchars($_GET['type']) . '">' . htmlspecialchars($message) . '</div>';      
    }
    


?>