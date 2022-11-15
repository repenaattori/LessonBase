<?php

require('../dbconnection.php');

$db = createSqliteConnection('../chinook.db');

$genre = $_POST['genre'];

$sql = "INSERT INTO genres (Name) VALUES (?)";

$statement = $db->prepare($sql);
$statement->bindParam(1, $genre);
$statement->execute();
