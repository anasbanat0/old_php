<?php
/*
  Lesson Name: How To Nested If Condition
  What We Will Use: If Condition, In_Array, Strlen
*/

$names = array("Anas", "Heba", "Enas", "Adham", "Hatem", "Gharam");

$forbiddenNamed = array("God", "Admin" , "Root");

if (in_array("Anas", $names)) {
  echo "- Your Name Is Exist.<br>";
  if (strlen("Anas") > 3) {
    echo "- Your Name Characters More Than 3 Letters.<br>";
    if (!in_array("Anas", $forbiddenNamed)) {
      echo "- Congratse Your Name Is Not Forbidden.<br>";
    }
  }
}

