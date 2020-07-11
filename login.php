<?php
	$usr=$_GET['username'];
    $pswd=$_GET['password'];

$conn=mysqli_connect('localhost','root',"",'project');
$sql="SELECT id,username,class,project,technologies,mentor FROM details WHERE username='$usr' and password='$pswd'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
// <div id="out">



//($row['username']==$usr && $row['password']==$pswd)
/*{echo "login successful";
}
else
{
	echo "login failed";
}
mysqli_close($conn);*/
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h1
		{
			background-color: black;
			color: white;
			font-family: georgia;
			text-align: center;
			font-size: 45px;
		}
		#data
		{
			margin-left: 200px;
		}
		.output
		{
			margin-left: 250px;
			margin-top: -33px;
			font-family: verdana;
		}
		img
		{
			position: absolute;
			margin-left: 850px;
			margin-top: 15px;
			border: 2px solid black;
		}
		button{
			position: absolute;
			margin-left: 1220px;
			margin-top: -81px;
			width: 110px;
			height: 50px;
			background-color: white;
			border: 2px solid #81BEF7;
			color: #B40431;
			border-radius: 15px;

		}
		button:hover{
			background-color: #81BEF7;
			color: black;
		}
	</style>
	<title>User Profile</title>
</head>
<body background="1280x720-data_out_15_62826170-blurred-wallpapers.jpg">
	<h1>User Profile</h1>
	<a href="http://localhost/web/home.html"><button><b>LOGOUT</b></button></a>
	<hr>
	<img src="images (2).png" width="180px" height="200px">
	<div id="data">
	<p><b>STUDENT ID :</b><div class="output"> <?php echo $row['id'] ?></div></p>
	<br>
	<p><b>USERNAME :</b><div class="output"> <?php echo $row['username'] ?></div></p>
	<br>
	<p><b>CLASS :</b><div class="output"> <?php echo $row['class'] ?></div></p>
	<br>
	<p><b>PROJECT :</b><div class="output"> <?php echo $row['project'] ?></div></p>
	<br>
	<p><b>MENTOR :</b><div class="output"> <?php echo $row['mentor'] ?></div></p>
	<br>
	<p><b>TECHNOLOGIES USED :</b><div class="output"> <?php echo $row['technologies'] ?></div></p>
</div>
</body>
</html>