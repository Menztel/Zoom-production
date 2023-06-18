<?php

include('../includes/bdd.php');

if( isset($_GET['id']) ) {

    $id_project = htmlspecialchars($_GET['id']);
    $path = "";
    
    // Fetch the page_name and the image name to delete
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

        $project_image_path = $path . $image;
    }

    // Fetch id annexe
    $statement_id = $bdd->query("SELECT id FROM annexe WHERE id_project = $id_project");
    $res_id = $statement_id->fetch(PDO::FETCH_ASSOC);
    if($res_id) {
        $id_annexe = htmlspecialchars($res_id['id']);
    }



    // Fetch title to get the folder path for annexe images
    $statement_title = $bdd->query("SELECT title FROM project WHERE id = $id_project");
    $res_title = $statement_title->fetch(PDO::FETCH_ASSOC);
    if($res_title) {
        $title = htmlspecialchars($res_title['title']);
    }


    // Delete images from annexe folder
    $statement_images = $bdd->query("SELECT name FROM images WHERE id_annexe = $id_annexe");
    $images = $statement_images->fetchALL(PDO::FETCH_ASSOC);
    if($images) {
        for($i = 0; $i < sizeof($images); $i++) {
            // convert element of array to string element with implode() function
            $annexe_image_path = "../images/annexes/" . $title . "/" . implode($images[$i]);
            unlink($annexe_image_path);
        };
    }

    $statement_delete_images = $bdd->prepare("DELETE FROM images WHERE id_annexe = ?");
    $res_delete_images = $statement_delete_images->execute([
        $id_annexe
    ]);


    // Delete targeted annexe
    $statement_delete_annexe = $bdd->prepare('DELETE FROM annexe WHERE id_project = ?');
    $res_delete_annexe = $statement_delete_annexe->execute([$id_project]);


    // Delete the targeted project
    $statement_delete_project = $bdd->prepare('DELETE FROM project WHERE id = ?');
    $res_delete_project = $statement_delete_project->execute([
        $id_project
    ]);
    if($res_delete_project) {
        unlink($project_image_path);  // delete a file in PHP
    }
    
    
}

?>