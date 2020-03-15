<?php 
header("Access-Control-Allow-Origin: *");

require 'connection.php';
$clients = [];
$sql = "SELECT * FROM client";

if($result = mysqli_query($con,$sql))
{
    $cr = 0;
    while($row = mysqli_fetch_assoc($result))
    {
        $clients[$cr]['ID']= $row['ID'];
        $clients[$cr]['Nom']= $row['Nom'];
        $clients[$cr]['Prenom']= $row['Prenom'];
        $clients[$cr]['Age']= $row['Age'];
        $cr++;
    }
    echo json_encode($clients);
    
}
else{
    http_response_code(404);

}
?>