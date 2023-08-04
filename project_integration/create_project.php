<?php

include('../includes/bdd.php');
   //Vérification image : fichier uploadé est une image et ne dépasse pas 1Mo.

    //si le fichier n'est pas du bon type : pas dans le tableau de type alors redirection avec message
    $acceptable = [
        'image/jpeg',
        'image/gif',
        'image/png',
    ];

    if (!in_array($_FILES['project-image']['type'], $acceptable)){
        header('location: ../admin_page.php?message=Erreur mauvais format image !&type=error');
        exit;
    }
    
    //si la taille du fichier est > 2Mo 
    $maxSize = 2*1024*1024 ; //1Mo
    if($_FILES['project-image']['size'] > $maxSize ) {
        echo 'Image trop lourde';
    }

    //ENREGISTREMENT DE L'IMAGE 
    if($_POST['page-name-project'] == "Identitée visuelle"){
        $path = '../images/photographie';
    }

    if($_POST['page-name-project'] == "Motion design"){
        $path = '../images/motion_design';
    }

    if($_POST['page-name-project'] == "Social media"){
        $path = '../images/edition';
    }

    if($_POST['page-name-project'] == "Évènementiel"){
        $path = '../images/evenementiel';
    }

    if(!file_exists($path)){
        mkdir($path, 0777); //chmod 777
    }

    $fileName = $_FILES['project-image']['name'];
    $array= explode('.', $fileName);
    $extension = end($array);
    $fileName ='img-' . time() . '.' . $extension ;
    $destination = $path . '/' . $fileName ;

    //On enregistre le fichier envoyé dans le serveur
    move_uploaded_file($_FILES['project-image']['tmp_name'], $destination);


    // Insert new project into project TABLE
    if(!empty($_POST['project-title']) && !empty($_POST['page-name-project']) && isset($_FILES['project-image'])) {
    
        $title = $_POST['project-title'];
        $pageName = $_POST['page-name-project'];
            $q = 'INSERT INTO project (title, image, page_name) VALUES (:title, :image, :page_name)';
            $statement = $bdd->prepare($q);
            if($statement != false) 
            {
                $result = $statement->execute([
                                                'title' => $title,
                                                'image' => isset($fileName) ? $fileName : '',
                                                'page_name' => $pageName
                ]);

                if($result) {
                    header('location: ../admin_page.php?message=Projet inséré !&type=valid');
                    exit;
                }
                else {
                    header('location: ../admin_page.php?message=Erreur insertion !&type=error');
                    exit;
                }
            }
            else {
                echo "Erreur de préparation de la requête";
                exit;
            };
        }
        else {
            header('location: ../ad,in_page.php');
            exit;
    }        
?>