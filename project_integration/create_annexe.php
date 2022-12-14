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

            $acceptable = [
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

            $array= explode('.', $fileName);
            $extension = end($array);
            $fileName ='img-' . rand() . '.' . $extension ;
   

             //ENREGISTREMENT DE L'IMAGE 

             if($_POST['page-name-annexe']){
                $path = '../images/annexes/' . $_POST['page-name-annexe'] . '/' . '';
            }
        

            if(!file_exists($path)){
                mkdir($path, 0777); //chmod 777
            }

            move_uploaded_file($fileTmpName, $path.$fileName);

            header('location: ../admin_page.php');
            
        };

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