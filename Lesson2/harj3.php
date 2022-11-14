<?php
require('../dbconnection.php');

$db = createSqliteConnection("../chinook.db");

$sql = "SELECT * FROM artists";

$statement = $db->prepare($sql);
$statement->execute();

$firstArtist = $statement->fetch(PDO::FETCH_ASSOC);
$aid = $firstArtist['ArtistId'];
$aname = $firstArtist['Name'];

$sql = "SELECT Title FROM albums WHERE ArtistId=".$aid;
$statement = $db->prepare($sql);
$statement->execute();

$titles = $statement->fetchAll(PDO::FETCH_COLUMN,0);

echo "<h1>".$aname."</h1>";

foreach( $titles as $title){
    echo $title.'<br>';
}