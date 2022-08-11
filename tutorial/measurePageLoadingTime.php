<?php
/*
  Lesson Name: How Measure The Page Loading Time
  What We will Use: microtime(), round(), range()
*/

// Microtime: Return The Current Unix Timestamp With Microseconds

$startTime = microtime(true);

// Start From Here

$range = range(1, 100000);

echo "<pre>";

print_r($range);

echo "</pre>";

// End Here

$endTime = microtime(true);

$timeTaken = $endTime - $startTime;

$timeTaken = round($timeTaken, 5);

echo $timeTaken . "<br>";

