<?php
    if(isset($_GET['message']) && !empty($_GET['message']) && isset($_GET['type']))
    {
        $message = $_GET['message'];
        echo '<script>alert("' . htmlspecialchars($message) . '")</script>';
    }
?>