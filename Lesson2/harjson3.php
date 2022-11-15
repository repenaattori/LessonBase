<?php

$body = file_get_contents("php://input");

$dataobject = json_decode($body);

foreach($dataobject as $game){
    echo "<img src='".$game->thumbnail."'/>";
}
