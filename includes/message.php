<?php

if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo '<div id="message">' . $message . '<div>';
}

?>