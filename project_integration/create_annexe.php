<?php

include('../includes/bdd.php');
  


    



    if(isset($_POST['add-annexe'])) {
        
        $namePage = $_POST['project-name-annexe'];

        // Fetch id of project

        $q = 'SELECT id FROM project WHERE title = ?';
        $statement = $bdd->prepare($q);

        if($statement)
        {
            $result = $statement->execute(array($namePage));
            $projectId = $statement->fetch(PDO::FETCH_ASSOC);
        }

        

          // Insert annexe
       
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $project_id = implode($projectId); // transform $projectId array into a string

        

        $q = 'INSERT INTO annexe(subtitle, description, id_project) VALUES(:subtitle, :description, :id_project)';
            $statement = $bdd->prepare($q);
            
            if($statement != false)
            {
                $result = $statement->execute([
                                                'subtitle' => $subtitle,
                                                'description' => $description,
                                                'id_project' => $project_id 
                ]);
            }

       
            
            
       
        // Insert new project into project TABLE
        foreach($_FILES['uploads']['tmp_name'] as $key => $image){
        
            
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

            if($namePage){
                $path = '../images/annexes/' . $namePage . '/' . '';
            }
        

            if(!file_exists($path)){
                mkdir($path, 0777); //chmod 777
            }

            move_uploaded_file($fileTmpName, $path.$fileName);

            
            // Fetch annexe id
        
            $q = 'SELECT id FROM annexe WHERE subtitle = ?';
            $statement = $bdd->prepare($q);

            if($statement)
            {
                $result = $statement->execute(array($subtitle));
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                $annexeId = implode($result); // Array to string
            }


            // Insert images

            $q = 'INSERT INTO images(name, id_annexe) VALUES(:name, :id_annexe)';
            $statement = $bdd->prepare($q);
            
            if($statement != false)
            {
                $result = $statement->execute([
                                                'name' => $fileName,
                                                'id_annexe' => $annexeId
                ]);
            }

            header('location: ../admin_page.php');
            
        };
      
    }
        
    

?>