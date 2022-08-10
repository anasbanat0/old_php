<?php
function setActive($name = 'home') {
  global $pageName;
  if (isset($pageName) && $pageName == $name) {
    echo "class='active'";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if(isset($pageName)) { echo ucwords($pageName); } ?></title>
  <style>
    *,
    ::before,
    ::after {
      box-sizing: border-box;
      margin: 0;
      font-size: 1.1rem;
    }
    ul {
      list-style: none;
      text-align: center;
      background: #000;
    }
    li {
      display: inline-block;
      margin-left: 20px;
      padding: 10px 0;
    }
    a {
      text-decoration: none;
      color: #fff;
    }
    .active {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <ul>
    <li><a <?php setActive('about'); ?> href="about.php" target="_blank">About</a></li>
    <li><a <?php setActive('service'); ?> href="service.php" target="_blank">Service</a></li>
    <li><a <?php setActive('map'); ?> href="map.php" target="_blank">Map</a></li>
    <li><a <?php setActive('add class active'); ?> href="addclassactive.php" target="_blank">Add Class Active</a></li>
  </ul>
</body>
</html>