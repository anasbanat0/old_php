<?php
/*
  Lesson Name: =, ==, ===
  What We Will Use: Assignment Operator, Equal, Identical, gettype
*/

$name = "Anas"; // String

$age = 24; // Integer

echo gettype($name) . "<br>";
echo gettype($age) . "<br>";

if ($age === "24")
  echo "True The Age Is " . $age;
else 
  echo "False The Age Is " . $age;