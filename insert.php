<?php

require "connect.php";

$nom = $_POST['fnom'];
$prenom = $_POST['fprenom'];
$email = $_POST['femail'];
$mdp = $_POST['fmdp'];
$instru = $_POST['finstru'];

$stmt = $pdo->prepare("INSERT INTO user (nom, prenom, email, mdp,instru) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$nom, $prenom, $email, $mdp, $instru]);

?>