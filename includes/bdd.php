<?php
        try
        {
                $bdd = new PDO('mysql:host=localhost;dbname=zoom_production;port=3307;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

// try
// {
// 	$bdd = new PDO('mysql:host=db5011879531.hosting-data.io;dbname=dbs10004595;port=3306;charset=utf8', 'dbu1449687', 'Wally2107:)');
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }
?>
