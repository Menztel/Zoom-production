<?php

include('../includes/bdd.php');

if( isset($_GET['id']) ) {

    $path = "";
    $statement = $bdd->prepare('SELECT image, page_name FROM project WHERE id = ?');
    $res = $statement->execute(array($_GET['id']));
    if($res)
    {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $image = $row['image'];
        $page_name = $row['page_name'];
        
        if($page_name == "Photographie")
        {
            $path = "../images/photographie/";
        }
        if($page_name == "Motion design")
        {
            $path = "../images/motion_design/";
        }
        if($page_name == "Illustration")
        {
            $path = "../images/illustration/";
        }   
        if($page_name == "Édition")
        {
           $path = "../images/edition/";

        }
        if($page_name == "Évènementiel")
        {
            $path = "../images/evenementiel/";
        }

        $newpath = $path . $image;
    }


    $statement = $bdd->prepare('DELETE FROM project WHERE id = ?');
    $res = $statement->execute([
        $_GET['id']
    ]);
    if($res) {
        unlink($newpath);
        echo "deleted"; // delete a file in PHP
    }
}

?>