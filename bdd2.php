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

h1 {
    text-align : center;
    font-family : Impact;
    font-size : 75px;
    color : white;
}

#liste  {
    text-align : center;
    font-family : Impact;
    font-size : 55px;
    list-style-type: none;
    color : white;
    text
}

ul  {
    list-style-type: none;
}

#liste a {
    font-family : Impact;
    font-size : 55px;
    list-style-type: none;
    color : white;
    text-decoration : none;

} 

</style>


<body>

<h1>Les Zicos</h1>

<div id="liste">

<?php
// Database settings
require("../fonctions.php");
$db="essai";
$dbhost="127.0.0.1";
$dbport=3306;
$dbuser="root";
$dbpasswd="";

$pdo = new PDO(
    "mysql:host=".$dbhost.";dbname=".$db.";charset=UTF8", $dbuser, $dbpasswd,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
  function getAllUsers() {
  global $pdo; 
  $stmt = $pdo->prepare("SELECT id_user, nom, prenom FROM user");
  $stmt->execute();
  $result = $stmt->fetchAll();
  
  echo "<ul>";
  foreach ( $result as $row){?>
        <li><a href='profile.php?id=<?=$row['id_user']?>'> <?=$row['nom'] ?> <?=$row['prenom'] ?></a></li>
 <?php }
  echo "</ul>";
}

getAllUsers();

?>

</div>

</body>
</html>