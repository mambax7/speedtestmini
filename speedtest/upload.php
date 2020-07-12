<?php
// Copyright 2009 Swata
// Calculates the size of an HTTP POST
$size = 500;
$request = isset($_REQUEST)?$_REQUEST:$_POST;
foreach ($request as $key => $value) {
   $size += (strlen($key) + strlen($value) + 3);
}
printf("size=%d",$size);
exit;
?>
