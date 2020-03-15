<?php
$request = json_decode(file_get_contents("php://input"));
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
require_once'connection.php';
if(isset($request) && !empty($request))
{
    $ID = mysqli_real_escape_string($con,(int)$_GET['ID']);
    $CNom = mysqli_real_escape_string($con,trim($request->Nom));
    $CPrenom = mysqli_real_escape_string($con,trim($request->Prenom));
    $CAge =mysqli_real_escape_string($con,(int)$request->Age);

    $sql = "UPDATE CLIENT SET Nom = '{$CNom}',Prenom = '{$CPrenom}' ,Age ={$CAge} where ID={$ID} Limit 1";

     if (mysqli_query($con,$sql)){
http_response_code(204);
 }
 else{
     http_response_code(422);
    }
}

?> 