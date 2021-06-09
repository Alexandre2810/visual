<?php
header('Content-Type: application/json');

#conn

$conn = mysqli_connect("localhost","root","","projetfinal");

#sqlQuery

$sqlQuery = "SELECT joueurs,score,exp1,exp2,exp3,exp4 FROM projetfinal.data___feuille_3; ORDER BY joueurs";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
