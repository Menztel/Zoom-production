<?php

include('../includes/bdd.php');

if( isset($_GET['id']) ) {

    $statement = $bdd->prepare('DELETE FROM project WHERE id = ?');
    $res = $statement->execute([
        $_GET['id']
    ]);
    if($res) {
        echo 'deleted';
    }
}

?>