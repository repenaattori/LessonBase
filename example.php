<?php
require('./dbconnection.php');

$db = createSqliteConnection('./chinook.db');

// $pw = password_hash("lasse", PASSWORD_DEFAULT);
// $db->exec("INSERT INTO user VALUES ('lasse','".$pw."')");

$uname="repe";
$pw = "repe";

$sql = "SELECT passwd FROM user WHERE username=?";
$statement = $db->prepare($sql);
$statement->execute(array($uname));

$hashpw = $statement->fetchColumn();

if(isset($hashpw) &&  password_verify($pw, $hashpw)){
    echo "Autentikointi onnistui!!!";
}else{
    echo "Kirjautuminen epäonnistui!";
}