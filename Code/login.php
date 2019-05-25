	<html>
<style>
form
{
border: 3px solid #f1f1f1;
}
input[type=text],
input[type=password],
{ width: 100%
  padding: 12px 20px;
  margin:8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}
button {
background-color: #4CAF50;
color: white;
padding: 14px 16px;
margin: 10px 0;
border: none;
cursor: pointer;
width: 100%;
}
button:hover {
opacity: 0.8;


}
.cancelbtn {

width: auto;
padding: 10px 18px;
background-color: #f44336;
}
.imgcontainer{
text-align: center;
margin: 24px 0 12px 0;

}

img.avatar {
width: 10%;
border-radius: 20%;

}
.container
{
padding: 16px;
}
span.psw {
float: right;
padding-top: 16px;
}

}
</style>
<title>Log in</title>
<meta name="author" content="ABHIJEET BISWAS">
<body background="download.jpg">
<div align="center" style="color:cyan;"><h1>login page</h1></div>
<center>
<form method="POST" action="log.php">
<div class="imgcontainer">
<img 	src="avatar-1606916_640.png" alt="AVATAR" class="avatar">
</div>
<div class="container">
<label><b>REG ID..</b></label>
<input type="text" placeholder="Enter Registration Id" name="a" required>
<br>
<label><b>Password</b></label>
<input type="password" placeholder="Enter password" name="b" required><br>
<input type="checkbox" checked="checked"> Remember me.<br>
<button type="submit">login</button>
</div>
</form>
</center>
</body>
</html>	