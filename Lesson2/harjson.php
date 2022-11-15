<?php

$body = file_get_contents("php://input");

$dataobject = json_decode($body);

$fname = $dataobject->fname;
$lname = $dataobject->lname;

echo $fname." ".$lname;