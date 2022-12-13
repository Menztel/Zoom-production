<?php

include('../includes/bdd.php');
  


    



    if(isset($_POST['add-annexe'])) {
       
            
        // Insert new project into project TABLE
        foreach($_FILES['uploads']['tmp_name'] as $key => $image){
            //var_dump($_FILES['uploads']['tmp_name'][$key]);
            
            $fileName = $_FILES['uploads']['name'][$key];
            $fileTmpName = $_FILES['uploads']['tmp_name'][$key];
            $fileType = $_FILES['uploads']['type'][$key];
            $fileSize = $_FILES['uploads']['size'][$key];

            $count = 0;

            $directory = '../images/annexes/';

            move_uploaded_file($fileTmpName, $directory.$fileName);


            
            //Vérification image : fichier uploadé est une image et ne dépasse pas 1Mo.


            //si le fichier n'est pas du bon type : pas dans le tableau de type alors redirection avec message
            
            /*$acceptable = [
                'image/jpeg',
                'image/gif',
                'image/png',
                
            ];
            
            

            if (!in_array($fileType, $acceptable)){
                echo 'Format incorrecte';
                exit;
            }
            
            //si la taille du fichier est > 2Mo 

            $maxSize = 2*1024*1024 ; //1Mo

            if($fileSize > $maxSize ) {
                echo 'Image trop lourde';
            }


            //ENREGISTREMENT DE L'IMAGE 

            if($_POST['page-name-annexe']){
                $path = '../images/annexes/' . $_POST['page-name-annexe'] . '';
            }
        

            if(!file_exists($path)){
                mkdir($path, 0777); //chmod 777
            }

            

            $array= explode('.', $fileName);

            $extension = end($array);
            $fileName ='img-' . time() . '.' . $extension ;
            $destination = $path . '/' . $fileName ;

            //On enregistre le fichier envoyé dans le serveur
            move_uploaded_file($fileTmpName, $destination);
            */
        }

        //header('location: ../admin_page.php?alert=Inserted');
            
            
            
            // Fetch idProject 

           /* $q = 'SELECT id FROM project WHERE title = :title';
            $statement = $bdd->prepare($q);
            $statement->execute([
                'title' => $title
            ]);

            if($statement)
            {
                $idProject = $statement->fetchAll(PDO::FETCH_ASSOC);

            }
            else
            {
                echo "Failed to fetch idProject";
            }


            // Insert new annexe image into image-annexe TABLE
            
            $q = 'INSERT INTO image-annexe (image,project-id) VALUES (:image, :project-id)';
            $statement = $bdd->prepare($q);
            if($statement != false)
            {
                $result = $statement->execute([
                                                'image'=> isset($fileName) ? $fileName : '',
                                                'project-id'=> $idProject
                ]);

                echo "Insert success";
            }
            else
            {
                echo "Failed to insert annexe images";
            }*/
            
    }
        
    

?>