<?php
/*
  PHP Alternative Syntax For Control Structure
  if, while, for, foreach, and switch
*/

$a = 1;
$b = 1;

if ($a > $b){
  echo "Yes<br>";
} elseif ($a == $b) {
  echo "Equal<br>";
} else {
  echo "No<br>";
}

if ($a > $b):
  echo "Yes<br>";
elseif ($a == $b):
  echo "Equal<br>";
else:
  echo "No<br>";
endif;
?>

<?php if ($a > $b): ?>
  Yes<br>
<?php elseif ($a == $b): ?>
  Equal<br>
<?php else: ?>
  No<br>
<?php endif; ?>

<?php
$numbers = array(0, 6, 8, 9, 14, 18, 20, 30, 50);

foreach ($numbers as $num) {
  if ($num < 10) {
    if ($num !== 0) {
      echo '0' . $num . "<br>";
    } else {
      echo "Zero<br>";
    }
  } else {
    echo $num . "<br>";
  }
}

foreach ($numbers as $num):
  if ($num < 10):
    if ($num !== 0):
      echo '0' . $num . "<br>";
    else:
      echo "Zero<br>";
    endif;
  else:
    echo $num . "<br>";
  endif;
endforeach;
?>

<?php foreach ($numbers as $num): ?>
  <?php if ($num < 10): ?>
    <?php if ($num !== 0): ?>
      <?php echo '0' . $num . "<br>"; ?>
    <?php else: ?>
      <?php echo "Zero<br>"; ?>
    <?php endif; ?>
  <?php else: ?>
    <?php echo $num . "<br>"; ?>
  <?php endif; ?>
<?php endforeach; ?>

