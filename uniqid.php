<?php
/*
  uniqid(Prefix, More_Entropy);
  Unique Identifier
*/
$random = uniqid('script1_', TRUE);
echo $random . "<br>";
var_dump($random);