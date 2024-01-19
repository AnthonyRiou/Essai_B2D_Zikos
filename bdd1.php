`
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

  function getAllUsers() {
    //requete qui me renvoie toutes les lignes de ma table user qui se trouve dans la BDD essai
    global $pdo; // global permet d'accéder aux variables globales
  $stmt = $pdo->prepare("SELECT * FROM user");
  $stmt->execute();
  //je renvoi un tableau avec chaque rangées.Ici un tableau de tableau.
  $res = $stmt->fetchAll();
  
  
  foreach ( $res as $row){
        echo "<h1>".$row['nom']." ".$row['prenom']."</h1>";
        echo "<p><i>".$row['email']."</i></p>";
        echo "<hr>";
  }
}

function getOneUsers($id) {
    global $pdo; // global permet d'accéder aux variables globales
    $stmt = $pdo->prepare("SELECT * FROM user WHERE $id =?");
    $stmt->execute([$id]);
    $res = $stmt->fetch();
    debug($res);
}

// getAllUsers();
getOneUsers(2);
