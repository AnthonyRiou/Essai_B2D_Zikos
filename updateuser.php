<?php

require "connect.php";

$nom = $_POST['fnom'];
$prenom = $_POST['fprenom'];
$email = $_POST['femail'];
$mdp = $_POST['fmdp'];
$instru = $_POST['finstru'];
$id = $_POST['fid'];

$stmt = $pdo->prepare("UPDATE user SET nom= ? , prenom = ? , email= ? , mdp = ? ,instru=? WHERE id_user = ?");
$stmt->execute([$nom, $prenom, $email, $mdp, $instru,$id]);

?>