<?php
  $conn=mysqli_connect("localhost","root","","pdd_db");
  $response = array();
if($conn) {
    echo "Database connection is successfully";
$result = mysqli_query($conn,"SELECT * FROM subcategory");  
if($result) {
    header('Content-Disposition: attachment; filename="subcategory.json"');
$i=0;
while($row = mysqli_fetch_array($result)){
$response[$i]['sub_id'] = $row['sub_id'];
$response[$i]['p_id'] = $row['p_id'];
$response[$i]['pgdName'] = $row['pgdName'];
$response[$i]['catName'] = $row['catName'];
$response[$i]['subCatName'] = $row['subCatName'];
$response[$i]['icon'] = $row['icon'];
$response[$i]['photo'] = $row['photo'];
$response[$i]['detail_info'] = $row['detail_info'];
$i++;
}
echo json_encode($response, JSON_PRETTY_PRINT);
}
}
else{
    echo "Not connected";
    echo json_encode(array('error'=> ''), JSON_PRETTY_PRINT);
}