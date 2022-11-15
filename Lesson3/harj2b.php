<?php
require('../dbconnection.php');
$db = createSqliteConnection('../chinook.db');

$body = file_get_contents("php://input");
$dataObject = json_decode($body);


$pid = $dataObject->playlistId;
$tid = $dataObject->trackId;

//Voidaan vain validoida eli tarkastaa tiedon oikeellisuus
// if( !filter_var($pid, FILTER_VALIDATE_INT) || !filter_var($tid, FILTER_VALIDATE_INT) ){
//     echo "Virheellinen id";
//     return;
// }

$pid = filter_var($pid, FILTER_SANITIZE_NUMBER_INT);
$tid = filter_var($tid, FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO playlist_track VALUES (?,?)";

$statement = $db->prepare($sql);

$statement->execute(array($pid,$tid));

