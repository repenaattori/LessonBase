<?php
require('../dbconnection.php');
$db = createSqliteConnection('../chinook.db');

$pid = filter_input(INPUT_POST, "playlistId", FILTER_SANITIZE_NUMBER_INT);
$tid = filter_input(INPUT_POST, "trackId", FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO playlist_track VALUES (?,?)";

$statement = $db->prepare($sql);

$statement->execute(array($pid,$tid));

