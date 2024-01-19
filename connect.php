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