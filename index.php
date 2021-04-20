<?php 
error_reporting(0);
include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
	<style type="text/css">
		*{
			font-family: "Trebuchet MS";
		}
		body{
			background-color: #F5F5F5;
			color: #464775;
			font-size: 15px;
			text-decoration:none; 
		}
		h1{
			text-transform: uppercase;
			color: #464775;

		}
		table{
			border: 2px solid #ddeeee;
			border-collapse: collapse;;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		table thead th{
			background-color: #ddefef;
			border:3px solid #ddeeee;
			color: #336b6b;
			padding: 10px;
			text-align: left;
			text-shadow: 1px 1px 1px #fff;
		}
		table tbody td{
			border:2px solid #ddeeee;
			color: #333;
			padding: 10px;
		}
		a{
			background-color: #464775;
			color: #fff;
			padding: 10px;
			font-size: 12px;
			text-decoration:none; 
			border-radius: 10px;
		}
		button{
			border:1px solid #ddeeee;
			background-color: #464775 ;
			color: #fff;
			padding: 7px;
			font-size: 10px;
			text-decoration:none; 
			border-radius: 10px;
		}

	</style>

</head>
<body>
	<center><h1>Data Buku</h1></center>

	<center><a href="tambah_buku.php">+ &nbsp; Tambah Buku </a></center>
	<br>
	<br>
	<center>
		<form action="" method="POST">
			<input type="text" name="query" placeholder="Cari Buku"/>
			<button type="submit">Search</button>
		</form>
	</center>
	<br>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>

		</thead>

		<tbody>
			<?php

			$query = " SELECT * FROM tabelbuku ORDER BY id ASC ";
			$result = mysqli_query($koneksi,$query);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}
			$query =$_POST['query'];
			if ($query != '') {$select = mysqli_query($koneksi, "SELECT * FROM tabelbuku WHERE judul LIKE '".$query."' ");
			}else{
			$select = mysqli_query($koneksi, "SELECT * FROM tabelbuku");
			}

			$no = 1;

			while ($row = mysqli_fetch_assoc($result)) {

			while ($row = mysqli_fetch_assoc($select)) {
				
			
			?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['pengarang']; ?></td>
				<td><?php echo $row['penerbit']; ?></td>
				<td><img style="width: 120px;" src="gambar/<?php echo $row['gambar'];?>"></td>
				<td>
					<a href="edit_buku.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a href="proseshapus_buku.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</a>
				</td>

				<?php
				$no++;
				}
			}
			?>
			</tr>
		</tbody>
	</table>
</body>
</html>