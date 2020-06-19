<?php

$birthday = exec("stat -c='%Y' /proc/1/"); // container start time
$birthday = substr($birthday, 1); // remove first character (=)
$birthday = date("Y-m-d H:i:s T"); // reformat date

$hostname = $_ENV['HOSTNAME'];

?>

<h1>Pod Details</h1>

<p>This pod is called <b><?php echo $hostname; ?></b>

<p>It was created at <b><?php echo $birthday; ?></b>