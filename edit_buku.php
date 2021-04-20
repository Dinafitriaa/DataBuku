<?php include('koneksi.php');

   if (isset($_GET['id'])) {
    $id= $_GET['id'];

    
    $query = "SELECT * FROM tabelbuku WHERE id ='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error :".mysqli_errno($koneksi).
         "-".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);

    if(!count($data)){
      echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='index.php';</script>";
    }

  }else{
    echo "<script>alert('Masukkan ID yang ingin di edit');window.location='index.php';</script>";
  }
  
 ?>

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
  <center>
    <h1>Edit Buku <?php echo $data['judul'];?></h1>
  </center>
  <form method="POST" action="prosesedit_buku.php" enctype="multipart/form-data">
  <section class="base">
    <div>
      <label>Judul</label>
      <input type="text" name="judul" autofocus="" required="" value=" <?php echo $data['judul'];?>" />
       <input type="hidden" name="id"value=" <?php echo $data['id'];?>" />
    </div>
    <div>
      <label>Pengarang</label>
      <input type="text" name="pengarang" required="" value=" <?php echo $data['pengarang'];?>"/>
    </div>
    <div>
      <label>Penerbit</label>
      <input type="text" name="penerbit" required="" value=" <?php echo $data['penerbit'];?>" />
    </div>
    <div>
      <label>Gambar</label>
       <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
      <input type="file" name="gambar" />
       <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
    </div>
    <div>
      <button type="submit">Simpan Buku</button>
    </div>
  </section>
</form>
</body>
</html>