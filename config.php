<?php
$db_host='mysql6.gear.host';
$db_user='wasup';
$db_pwd='Ey5unaR~u0Q?';
$database='wasup';

if(!mysql_connect($db_host,$db_user,$db_pwd))
die("can't Connect to Database");

if(!mysql_select_db($database))
die("can't Select Database");
?>
