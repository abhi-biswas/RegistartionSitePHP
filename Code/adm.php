<?php
session_start();
if(!isset($_SESSION['name'] ))
{
header("location:home.php");
}
else
{ 
$x=$_POST['a'];
mysql_connect("localhost","root","");
mysql_select_db("project");
$query1="SELECT * FROM student";
$result=mysql_query($query1);
$row=mysql_fetch_array($result);
if($_SESSION['name']!=$row[9])
{header("location:home.php");}
else
{ $query="UPDATE student set status='1' WHERE reg='$x'";
mysql_query($query);
$query1="SELECT * FROM student WHERE reg='$x'";
$result1=mysql_query($query1);
$row=mysql_fetch_array($result1);
$t=$row[2];
mail($t,"Confirmed Registration","Your registration has been successfully confimed");
echo("done");
header("location:admin.php");
}


}
?>