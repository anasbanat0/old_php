<?php
/*
  User Input
  Cookies
  Web Service
  Server Variables
  Database Query Result

*/
foreach(filter_list() as $filter) {
  echo $filter . "<br>";
}
?>
<form action="chk.php" method="POST">
  <input type="text" name="test">
  <input type="submit" value="Send">
</form>