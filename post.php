<?php

$date = date('dMYHis');
$messageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, "Log.log");

}

$filteredData=substr($messageData, strpos($messageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( './message/message'.$date.'.txt', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

exit();
?>
