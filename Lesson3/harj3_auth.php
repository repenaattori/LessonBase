<?php
require('../dbconnection.php');
$db = createSqliteConnection('../chinook.db');

$body = file_get_contents("php://input");
$dataobject = json_decode($body);


if(!$dataobject->uname || !$dataobject->pw){
    http_response_code(403);
    return;
}


$sql = "SELECT passwd FROM user WHERE username=?";
$statement = $db->prepare($sql);
$statement->execute(array($dataobject->uname));

$hashpw = $statement->fetchColumn();

if(isset($hashpw) &&  password_verify($dataobject->pw, $hashpw)){

    $sql = "INSERT INTO artists (Name) VALUES (?)";
    $statement = $db->prepare($sql);
    
    foreach($dataobject->artists as $artist){
        $artist = strip_tags($artist);
        //$statement->bindParam(1,$artist);
        $statement->execute(array($artist));
    }
}else{
    http_response_code(403);
    return;
}


