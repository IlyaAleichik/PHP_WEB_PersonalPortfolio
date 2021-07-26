<?php
$main = file_get_contents("templates/main.html");
$header = file_get_contents("templates/header.html");

$main = str_replace('{header}', $header, $main);
echo $main;
