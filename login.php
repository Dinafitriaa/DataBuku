<!DOCTYPE html>
<html>
<head>
	<title>LOGIN DATA BUKU</title>
	<style type="text/css">
		*{
			font-family: "Trebuchet MS";
		}
		body{
			background-color: #F5F5F5;
			color: #464775;
			font-size: 25px;
			text-decoration:none; 
		}
		button{
			border:1px solid 	#464775;
			background-color: #464775;
			color: #fff;
			padding: 10px;
			font-size: 12px;
			text-decoration:none; 
			border-radius: 10px;
		}
		

	</style>
</head>
<body>
	<center>
		<form action="index.php" method="POST" style="margin-top: 200px">
			<h1>Login</h1>
			<label>Username : </label>
			<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
			<br>
			<br>
			<label>Password : </label>
			<input type="text" name="password" placeholder="masukkan password" required="" autofocus="">
			<br>
			<br>
			<button type="submit">Submit</button>
		</form>
		<?php if (isset($_GET['pesan'])){ ?>
			<label style="color: red; ">Oopppss....<?php echo $_GET['pesan']; ?></label>
		<?php }?>
	</center>

</body>
</html>