<?php

$var = 1;
system('gpio -g mode 17 out');
system('gpio -g write 17 1');
usleep(3000000);
$var = 0;
?>

