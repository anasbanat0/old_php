<?php
date_default_timezone_set('Asia/Gaza'); // Set To Gaza Timezone
/*
  date(Format, timestamp)
  strtotime(date, timestamp)
*/


$nextMonth = time() + (30 * 24 * 60 * 60);
$nextWeek = time() + (7 * 24 * 60 * 60);

echo date("Y-m-d h:i:s a", $nextMonth) . "<br>";
echo date("Y-m-d h:i:s a", $nextWeek) . "<br>";

echo 'This Year Is ' . date("Y") . "<br>";
echo 'Copyright To Digital World &copy; 2021-' . date("Y") . "<br>";
echo 'This Month Is ' . date("M") . "<br>";
echo 'This Day Is ' . date("d") . "<br>";
echo date("Y-m-d") . "<br>";
echo date("Y-m-d \of h:i:s a") . "<br>";
echo date("l") . "<br>";
echo date("j") . "<br>";
echo date("N") . "<br>";
echo date("l jS \of F Y h:i:s A") . "<br>";
$afterTwoDays = time() + (2*24*60*60);
echo date("jS", $afterTwoDays) . "<br>";
echo "May 31, 1998 is on a " . date("l", mktime(0, 0, 0, 5, 31, 1998)) . "<br>";
echo date(DATE_RFC2822) . "<br>";
echo date(DATE_ATOM, mktime(0, 0, 0, 5, 31, 1998)) . "<br>";
echo date('l \t\h\e jS') . "<br>";
echo date("D M j h:i:s T Y") . "<br>";

$afterSixMonths = time() + (6 * 30 * 24 * 60 * 60);
echo "After Six Months of now the date will be: " . date("l jS M", $afterSixMonths) . "<br>";


$time = strtotime('now');
echo $time . "<br>";
echo date("Y-m-d h:i:s", $time) . "<br>";

$time = strtotime("31 May 1998");
echo date("Y-m-d h:i:s", $time) . "<br>";

$str = '31 May 1998 04:30:30 PM';

if (($timestamp = strtotime($str)) === false) {
    echo "The string ($str) is bogus<br>";
} else {
    echo "$str == " . date('l dS \of F Y h:i:s A', $timestamp) . "<br>";
}

echo date( "Y-m-d", strtotime( "1998-05-31 +1 month" ) ) . "<br>";

$d = new DateTime( '1998-05-31' );
$d->modify( 'next month' );
echo $d->format( 'D jS F' ), "<br>";



