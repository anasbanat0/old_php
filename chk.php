<?php
$input = $_POST['test'];
// echo filter_var($string, FILTER_SANITIZE_STRING);
// if(filter_var($input, FILTER_VALIDATE_URL) !== FALSE) {
//   echo 'Good The '.$input . ' You Entered Is URL';
// } else {
//   echo 'Sorry The '.$input . ' You Entered Is Not URL';
// }

// $opt = array(
//   'options' => array(
//     'min_range' => 1,
//     'max_range' => 999,
//   ),
//   'flags' => FILTER_FLAG_ALLOW_HEX
// );

// if(filter_var($input, FILTER_VALIDATE_INT, $opt) !== FALSE) {
//   echo 'Good The ' . $input . ' You Entered Is Integer & Its from 1 to 999';
// } else {
//   echo 'Sorry The ' . $input . ' Must Be Between 1-999';
// }

$goodInput = filter_var($input, FILTER_SANITIZE_EMAIL);

// echo 'Main Input = '.$input.'<br>';
echo 'Input After Sanitize = ' . $goodInput . '<br>';

if(filter_var($goodInput, FILTER_VALIDATE_EMAIL) !== FALSE) {
  echo 'Good';
} else {
  echo 'Bad';
}

