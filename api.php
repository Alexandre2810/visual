<?php
$con = mysqli_connect("localhost","root", "","API_DATA");
$response = array();
if($con){
    $sql = "select * from data";
    $result = mysqli_query($con,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['category'] = $row['category'];
            $response[$i]['score'] = $row['score'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "DataBase connection failed";
}
?>