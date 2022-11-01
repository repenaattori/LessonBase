<?php
require('dbconnection.php');

$dbcon = createSqliteConnection();

$command = "INSERT INTO person (fname,lname) VALUES ('John','Doe')";

$dbcon->exec($command);


