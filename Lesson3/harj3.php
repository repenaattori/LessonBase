<?php
require('../dbconnection.php');
$db = createSqliteConnection('../chinook.db');

$body = file_get_contents("php://input");
$dataobject = json_decode($body);

$sql = "INSERT INTO artists (Name) VALUES (?)";
$statement = $db->prepare($sql);

foreach($dataobject as $artist){
    $artist = strip_tags($artist);
    //$statement->bindParam(1,$artist);
    $statement->execute(array($artist));
}