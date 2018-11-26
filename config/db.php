<?php

try

{

$db = new PDO('mysql:host=localhost;dbname=websqlmap', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

$con = mysqli_connect("localhost", "root", "", "websqlmap");
?>