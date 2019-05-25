<?php

session_start();
if(isset($_SESSION['name']))
{
if($_SESSION['name']=="admin")
{
header("location:admin.php");
}
else
{


}

}
else
{
header("location:home.php");
}




?>