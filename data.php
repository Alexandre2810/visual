<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","projetfinal");

$sqlQuery = "SELECT joueurs,score FROM data___feuille_3";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>