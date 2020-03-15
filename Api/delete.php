<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');

require 'connection.php';

$ID=$_GET['ID'];
$sql="DELETE FROM CLIENT WHERE ID={$ID} limit 1";


if(mysqli_query($con,$sql)){
    http_response_code(204);
}
else{
    http_response_code(422);
}
?>