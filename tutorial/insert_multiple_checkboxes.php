<?php
/*
  Lesson Name: Insert Multiple Checkboxes In One Field
  What We Will Use: Array, Implode(), Explode()
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo $_POST['username'] . "<br>";
  $allBrowsers = implode(', ', $_POST['browser']);
  echo $allBrowsers . "<br>";
  $splitted = explode(', ', $allBrowsers);
  foreach ($splitted as $single) {
    echo '<a href="#" target="_blank">'.$single.'</a><br>';
  }

  // foreach ($_POST['browser'] as $b) {
  //   echo $b . " ";
  // }
}

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  <input type="text" name="username"><br>
  <input type="checkbox" name="browser[]" value="Chrome"> Chrome <br>
  <input type="checkbox" name="browser[]" value="Firefox"> Firefox <br>
  <input type="checkbox" name="browser[]" value="Opera"> Opera <br>
  <input type="submit" value="Add">
</form>