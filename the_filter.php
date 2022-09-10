<?php
/*
  User Input
  Cookies
  Web Service
  Server Variables
  Database Query Result
*/

/*
  filter_var(variable, filter_type, options)
*/
foreach(filter_list() as $filter) {
  echo $filter . "<br>";
}
?>
<form action="chk.php" method="POST">
  <h3>Enter Your Pin Code: Only Numbers Allowed</h3>
  <input type="text" name="test">
  <input type="submit" value="Send">
</form>


