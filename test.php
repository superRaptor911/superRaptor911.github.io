<?php

header("Content-Type: text/html"); // Set Content-Type
while (@ob_end_flush()); // Flush and disable output buffers

$itime = date("s");

while (date("s") - $itime < 30) {
	echo date("s")."<br>";
	flush();
	sleep(1);
}
	
?>