<?php

$body = file_get_contents('php://input');

$dataObject = json_decode($body);

foreach($dataObject as $person){
  echo $person->age."<br>";
}

header('Content-type: application/json');
echo '{"name":"Reima"}';

