<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "id17055599_root", "Batman_0102034", "id17055599_projetfinal");

$sqlQuery = "SELECT * FROM data___feuille_1";

$sqlQuery2 = "SELECT * FROM data___feuille_2";

$sqlQuery3 = "SELECT * FROM data___feuille_3";

$result = mysqli_query($conn, $sqlQuery);

$result2 = mysqli_query($conn,$sqlQuery2);

$result3 = mysqli_query($conn,$sqlQuery3);

$data = [];

$data2 = [];

$data3 = [];

while ($entry = mysqli_fetch_assoc($result)) {
    $data[] = $entry;
}

while ($entry2 = mysqli_fetch_assoc($result2)) {
    $data2[] = $entry2;
}

while ($entry3 = mysqli_fetch_assoc($result3)) {
    $data3[] = $entry3;
}

var_dump($data, $data2, $data3);

mysqli_close($conn);


echo json_encode($data);
echo json_encode($data2);
echo json_encode($data3);
?>