<?php 

require "connect.php";


$stmt = $pdo->prepare("SELECT nom, prenom,id_user FROM user");
$stmt->execute();
$result = $stmt->fetchAll();


echo "<ul>";
foreach($result as $row) {
?>
<li><?=$row['nom'] ?> <?= $row['prenom'] ?><a href="modif.php?id=<?= $row['id_user']?>">modif</a></li>
<?php };
echo "</ul>";

?>