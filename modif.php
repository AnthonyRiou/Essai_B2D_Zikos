<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require "connect.php";
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM user WHERE id_user=?");
$stmt->execute([$id]); 
$row = $stmt->fetch();


?>
<form action= "updateuser.php" method="POST">
    <input type="text" name="fnom" value ="<?=$row['nom'] ?>" placeholder="Votre nom">
    <input type="text" name="fprenom" value = "<?=$row['prenom'] ?>" placeholder="Votre prenom">
    <input type="text" name="femail" value ="<?=$row['email'] ?>" placeholder="Votre email">
    <input type="text" name="fmdp" value ="<?=$row['mdp'] ?>"  placeholder="Votre mdp">
    <input type="text" name="finstru" value ="<?=$row['instru'] ?>" placeholder="Votre instrument">
    <input type="hidden" name ="fid"  value=<?=$row['id_user'] ?>>
    <input type="submit" value="OK">

</form>

</body>
</html>



