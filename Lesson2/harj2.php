<?php
require('../dbconnection.php');

$db = createSqliteConnection("../chinook.db");

$sql = "SELECT * FROM customers";

$statement = $db->prepare($sql);

$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_COLUMN, 2);

foreach($rows as $row){
    echo $row.'<br>';
}