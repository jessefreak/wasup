<?php
$db_host='mysql6.gear.host';
$db_user='wasup';
$db_pwd='Ey5unaR~u0Q?';
$database='wasup';

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysql_query("insert into comments (name,comment,post_time) values('$name','$comment',CURRENT_TIMESTAMP)");
}

?>