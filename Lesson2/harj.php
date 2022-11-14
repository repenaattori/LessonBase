<?php
require('../dbconnection.php');

$db = createSqliteConnection("../chinook.db");

$sql = "SELECT Name FROM genres";

$statement = $db->prepare($sql);

$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo $row['Name'].'<br>';
}