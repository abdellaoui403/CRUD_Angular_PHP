<?php
// include database connection file
$request = json_decode(file_get_contents("php://input"));
header('Content-type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers');
require_once'connection.php';
if(isset($request) && !empty($request))
{

    //variables
    $CNom = mysqli_real_escape_string($con,trim($request->CNom));
    $CPrenom = mysqli_real_escape_string($con,trim($request->CPrenom));
    $CAge =mysqli_real_escape_string($con,(int)$request->CAge);
    //sql 
$sql = "INSERT INTO CLIENT (ID,Nom,Prenom,Age) values (null,'{$CNom}','{$CPrenom}',{$CAge})";
 if (mysqli_query($con,$sql)){
http_response_code(201);
 }
 else{
     http_response_code(422);
    }
}

?>