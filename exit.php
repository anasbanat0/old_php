<?php
/*
  exit();
  die();
*/
$file = 'anasd.txt';
$handle = @fopen($file, 'r') or exit("Unable to find $file");
echo 'Hello I will write in file now<br>';


