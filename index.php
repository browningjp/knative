<?php

$birthday = system("stat -c='%y' /proc/1/"); // container start time
$hostname = $_ENV['HOSTNAME'];

?>

<h1>Pod Details</h1>

<p>This pod is called <b><?php echo $hostname; ?></b>

<p>It was created at <b><?php echo $birthday; ?></b>