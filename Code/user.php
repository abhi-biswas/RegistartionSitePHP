<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("project");

$query="SELECT * FROM student WHERE name='$_SESSION['name']'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
echo"$row[2]";
echo"<html>";
echo"<body>";
echo"</body>";
echo"</html>";


?>