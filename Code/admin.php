  <?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:home.php");
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("project");
$query="SELECT * FROM student ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$r=$_SESSION['name'];
if($r!=$row[9])
{
header("location:home.php");
}
else
{
echo"<html>";
echo"<head>";
echo"<meta name=\"author\" content=\"ABHIJEET BISWAS\">";
echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"admin.css\">
</head>";
echo"<title>Admin Page</title>";
echo"</head>";
echo"<body>
<center>";
echo"<h1 align=\"center\">STUDENT DATA</h1>";
echo"</div>";
echo"<div class=\"ar\">";
echo"<table >";
echo"<tr class=\"head\">";
echo"<td>";
echo"NAME";
echo"</td>";
echo"<td>";
echo"Password";
echo"</td>";

echo"<td>";
echo"Email";
echo"</td>";

echo"<td>";
echo"Phone";
echo"</td>";

echo"<td>";
echo"College";
echo"</td>";

echo"<td>";
echo"Semester";
echo"</td>";

echo"<td>";
echo"DOB";
echo"</td>";

echo"<td>";
echo"Father's name";
echo"</td>";

echo"<td>";
echo"Branch";
echo"</td>";

echo"<td>";
echo"Reg ID";
echo"</td>";

echo"<td>";
echo"Status";
echo"</td>";
echo"</tr>";

while($row=mysql_fetch_array($result))
{$j=0;
echo"<tr>";
while($j<11)
{

if($j!=10)
{echo"<td>$row[$j]</td>";
$j=$j+1;}  
else{ $t=$row[$j];
       if($t!=0)
	   {echo"<td>Confirmed</td>";}
	   else
	   {
	   echo"<td>Not Confirmed</td>";
	   }
	   $j=$j+1;
}
}
echo"</tr>";

}
echo"</table>";
echo"
</center>";
echo"<form method=\"POST\" action=\"adm.php\">";
echo"<input type=\"text\" name=\"a\" placeholder=\"ENTER REG ID OF STUDENT\" size=\"50\">";
echo"<input type=\"submit\" value=\"Confirm\" class=\"btn2\" >";
echo"<a href=\"logout.php\"><button type=\"button\" class=\"btn\">Log Out</button></a>";

echo"</body>";
echo"</html>";

}

}
?>