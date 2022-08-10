<?php
/*
  Lesson Name: How To Include All Files Inside Path With Glob
  What We Will Use: Include, Glob, If Condition
*/

foreach (glob('inc/*.{php,txt}', GLOB_BRACE) as $file) {
  include $file;
}
foreach (glob('inc/*.css') as $file) {
  echo "<link rel='stylesheet' href='" . $file . "'>";
}