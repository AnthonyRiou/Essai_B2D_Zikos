<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

body {
    background-image : url("./fond-ecran.jpg");
    background-repeat : no-repeat;
    background-size : cover;
}

#answer {
    text-align : center; 
    color : black;

}

</style>

<body>

<div id = "answer">

<?php

// Database settings
require("../fonctions.php");
$db="essai";
$dbhost="127.0.0.1";
$dbport=3306;
$dbuser="root";
$dbpasswd="";

$pdo = new PDO(
    "mysql:host=127.0.0.1;dbname=".$db.";charset=UTF8", $dbuser, $dbpasswd,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );

function getOneUser($id) {
  
    global $pdo; // global permet d'accéder aux variables globales
    $stmt = $pdo->prepare("SELECT * FROM user WHERE id_user =?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    echo "<h1>".$row['nom']." ".$row['prenom']."</h1>";
        echo "<p><i>".$row['email']."</i></p>";
        echo "<p><i>".$row['instru']."</i></p>";
        echo "<hr>";
}

getOneUser($_GET['id']);


?>

</div>

</body>
</html>