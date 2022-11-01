<?php
require('dbconnection.php');

$dbcon = createSqliteConnection();

$command = "INSERT INTO artists (Name) VALUES ('Tuomari Nurmio')";

$dbcon->exec($command);

$id = $dbcon->lastInsertId();

$command = "INSERT INTO albums (Title, ArtistId) VALUES ('Punainen planeetta', $id)";

$dbcon->exec($command);





