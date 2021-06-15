<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1", "root", "", "projetfinal");

$sqlQuery = "SELECT joueurs,score FROM data___feuille_3";

$result = mysqli_query($conn, $sqlQuery);

$data = [];

while ($entry = mysqli_fetch_assoc($result)) {
    $data[] = $entry;
}

mysqli_close($conn);


echo json_encode($data, JSON_PRETTY_PRINT);
?>