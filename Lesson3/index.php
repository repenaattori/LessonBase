<?php
// require('../dbconnection.php');

// $db = createSqliteConnection('persondb.db');

// $name1 = "Simo";
// $name2 = "Markku";
// $name3 = "Veikka";

// $sql = "INSERT INTO person (name) VALUES (?),(?),(?)";

// $statement = $db->prepare($sql);

// $statement->execute(array($name1,$name2,$name3));

// $name1 = "Leevi";
// $name2 = "Jack";
// $name3 = "Liz";

// $statement->execute(array($name1,$name2,$name3));

$numero = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

echo $numero;


// $text = "<h1>Minun oma otsikko</h1>";
// echo htmlspecialchars($text);
