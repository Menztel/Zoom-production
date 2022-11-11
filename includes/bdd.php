<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=zoom_production;port=3306;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
