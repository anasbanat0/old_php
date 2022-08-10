<?php
/*
  Lesson Name: How To Use Short If Condition
  What We Will Use: If condition
*/

$age = 24;
$name = "Anas";

// Variable = Condition ? True : False;

$var = $name === "Anas" && $age > 20 ? "Cool<br>" : "Sorry, You Are Very Young!";

echo $var;

$age = 15;
$name = "Aseel";

if ($name === "Aseel" && $age > 20) {
  echo "Cool";
} else {
  echo "Sorry, You Are Very Young!";
}