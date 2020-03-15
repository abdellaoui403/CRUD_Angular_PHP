<?php 
header("Access-Control-Allow-Origin: *");

require 'connection.php';
$ID = $_GET['ID'];

$sql="SELECT * FROM CLIENT WHERE ID={$ID} limit 1";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
 echo $json = json_encode($row);
    
exit;
?>