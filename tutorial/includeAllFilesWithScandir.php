<?php
/*
  Lesson Name: How To Include All Files In A Path With Scandir
  What We Will Use: Pathinfo, In_Array(), Scandir, If Condition, __DIR__
*/
$dir = __DIR__ . '\\inc\\'; // Include Path Variable

$exts = array("php", "css", "txt");

foreach (scandir($dir) as $file) {
  if (in_array(pathinfo($file, PATHINFO_EXTENSION), $exts)) {
    include $dir . $file;
    // echo $file . "<br>";
    // echo 'Good There\'s PHP Files Here.' . '<br />';
  }
}
