<?php
/*
  sleep(seconds);
  usleep(Microsecond);
  time_sleep_until(time() + 5);
*/
function checkFile() {
  if(file_exists('anas.txt')) {
    echo 'Good The file is fount';
  } else {
    time_sleep_until(time() + 5);
    checkFile();
  }
}
checkFile();





