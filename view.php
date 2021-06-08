<?php
$pdo = new PDO("mysql:host=localhost;dbname=projetfinal;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
$stmt = $pdo->prepare("Select * from data___feuille_3
where joueurs = 'Gamers'");
$stmt2 = $pdo->prepare("Select * from data___feuille_3
where joueurs = 'Non-gamers'");
$stmt->execute();
$stmt2->execute();


$test = $stmt->fetchAll(PDO::FETCH_ASSOC);
$test2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

var_dump($test, $test2)
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
</head>

<header>

</header>
<body>
    <h1>YO</h1>

</body>

</html>