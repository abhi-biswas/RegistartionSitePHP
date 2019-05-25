<?php
 session_start();
$x=$_POST['a'];
$y=$_POST['b'];

mysql_connect("localhost","root","");
mysql_select_db("project");
$query="SELECT * FROM student WHERE reg='$x' AND password='$y'";
$result=mysql_query($query);
 $count=mysql_num_rows($result);
 $_SESSION['name']=$x;
if($count!=0)
{
$query2="SELECT * FROM student";
$result2=mysql_query($query2);
$row2=mysql_fetch_array($result2);
  if($x==$row2[9])
  {
  header("location:admin.php");
  
  }
 else
 {
 $query1="SELECT * FROM student WHERE reg='$x'";
$result1=mysql_query($query);
$row=mysql_fetch_array($result1);
echo"<html>";
echo"<head>";
echo"<meta name=\"author\" content=\"ABHIJEET BISWAS\">";
echo"<title>Registration page</title>";
echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"user.css\">";
echo"</head>";
echo"<center>";
echo"<body >";
echo"<div class=\"container\">";
echo"<table>";
echo"<tr><td><b>Name</b></td><td>$row[0]</td></tr>";
echo"<tr><td><b>Email</b></td><td>$row[2]</td></tr>";
echo"<tr><td><b>Phone</b></td><td>$row[3]</td></tr>";
echo"<tr><td><b>college</b></td><td>$row[4]</td></tr>";
echo"<tr><td><b>semester</b></td><td>$row[5]</td></tr>";
echo"<tr><td><b>DOB</b></td><td>$row[6]</td></tr>";
echo"<tr><td><b>Father's name</b></td><td>$row[7]</td></tr>";
echo"<tr><td><b>Branch</b></td><td>$row[8]</td></tr>";
echo"<tr><td><b>Registration id</b></td><td>$row[9]</td></tr>";
echo"</table>";
echo"</div>";
if($row[10]==0)
{echo"<div class=\"aa\">";
echo"<b><i><u>You are not yet confirmed.<br>Please Confirm your payment.<br></u></i></b>";
echo"</div>";}
else
{echo"<div class=\"ab\">";

echo"<b><i><u>You are confirmed<br>For the program.</u></i></b>";
echo"</div>";}

echo"<center>";
echo"<form action=\"logout.php\"><input type=\"submit\" value=\"Log Out\" class=\"btn\"></form>";
echo"</center>";
echo"</body >";
echo"</center>";
echo"</html>";


}
} 
 
else
{
echo"user doesn't exist";
header ("location:sign.php");
}





?>