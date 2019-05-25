<?php
$x =$_POST['a'];
$y =$_POST['b'];
$z =$_POST['c'];
$v =$_POST['d'];
$w =$_POST['e'];
$j =$_POST['f'];
$k =$_POST['g'];
$l =$_POST['h'];
$m =$_POST['i'];

mysql_connect("localhost","root","");
mysql_select_db("project");
$query="SELECT * FROM student WHERE name='$x' AND password='$y'";
$result = mysql_query($query);
$count=mysql_num_rows($result);
if($count ==0)
{  $o=0;
  $n=rand(10000,100000);
  $query1="SELECT * FROM student WHERE reg='$n'";
  $result1=mysql_query($query1);
  $count1=mysql_num_rows($result1);
 while($count1!=0)
  {
  $n=rand(10000,100000);
  $query1="SELECT * from student WHERE reg='$n'";
  $result1=mysql_query($query1);
  $count1=mysql_num_rows_rows($result1);
  
  }
  
$query1="INSERT INTO student VALUES('$x','$y','$z','$v','$w','$j','$k','$l','$m',$n,$o)";

mysql_query($query1);

$subject = 'REGISTRATION';
$message="hello, your reg id is '.$n.'\n you are not yet confirmed for program";
mail($z,"Sign UP","hello, your reg id is $n \n you are not yet confirmed for program.\n please make payment and contact us for confirmation.");
header("location:login.php");
}
else
{
echo"user already exists, please log in";
}










?>