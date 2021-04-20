<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<style type="text/css">

		*{
			font-family: "Trebuchet MS";

		}

		h1{
			text-transform: uppercase;
			color: #464775;
		}
		.base{
			width: 400px;
			padding: 20px;
			margin-left:auto;
			margin-right: auto; 
			background-color: #ededed;
		}
		label{
			margin-top: 10px;
			float: left;
			text-align: left;
			width: 100%;
		}
		input{
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f8f8f8;
			border: 2px solid #ccc;
			outline-color: #464775;
		}
		button {
			border:1px solid #ddeeee;
			background-color: #464775;
			color: #fff;
			padding: 10px;
			font-size: 12px
			border: 0;
			margin-top: 20px;
			border-radius: 10px;

		}
		body{
			background-color: #F5F5F5;
			color: #464775;
			font-size: 15px;
			text-decoration:none; 
		}
	</style>
</head>
<body>
	<center><h1>Tambah Buku</h1></center>
	<form method="POST" action="prosestambah_buku.php" enctype="multipart/form-data">
	<section class="base">
		<div>
			<label>Judul</label>
			<input type="text" name="judul" autofocus="" required="" />
		</div>
		<div>
			<label>Pengarang</label>
			<input type="text" name="pengarang" required="" />
		</div>
		<div>
			<label>Penerbit</label>
			<input type="text" name="penerbit" required="" />
		</div>
		<div>
			<label>Gambar</label>
			<input type="file" name="gambar" required="" />
		</div>
		<div>
			<button type="submit">Simpan Buku</button>
		</div>
	</section>
</form>
</body>
</html>