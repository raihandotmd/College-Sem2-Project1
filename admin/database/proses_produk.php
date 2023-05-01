<?php

require_once '../dbkoneksi.php';


if (isset($_POST['proses'])) {
  $_proses = $_POST['proses'];

  $_kode = $_POST['kode'];
  $_nama = $_POST['nama'];
  $_harga = $_POST['harga_beli'];
  $_stok = $_POST['stok'];
  $_minstok = $_POST['min_stok'];
  $_deskripsi = $_POST['deskripsi'];
  $_jenis = $_POST['kategori_produk'];



  $_image = $_FILES['file'];
  $fileTmp = $_image['tmp_name'];
  $fileArrayExt = explode(".", $_image['name']);
  $fileExtension = end($fileArrayExt);
  $newImgName = uniqid('product_').".".$fileExtension;
  $fileDestination = 'uploads/'.$newImgName;

  $ar_data[] = $_kode; // 1
  $ar_data[] = $_nama; // 2
  $ar_data[] = $newImgName; // 3
  $ar_data[] = 1.2 * $_harga; // harga jual - 4
  $ar_data[] = $_harga; // harga beli - 5
  $ar_data[] = $_stok; // 6
  $ar_data[] = $_minstok; // 7
  $ar_data[] = $_deskripsi; // 8
  $ar_data[] = $_jenis; // 9
}

if (isset($_GET['iddel']) && empty($_proses)) {
  // delete data
  $_idData = $_GET['iddel'];

  $ar_data[] = $_idData;
  $ImgDelete = "SELECT image FROM produk WHERE id=?";
  $stmt = $dbh->prepare($ImgDelete);
  $stmt->execute($ar_data);
  
  // Fetch the result as an associative array
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  $image = $row['image'];
  unlink("uploads/".$image);

  $sql = "DELETE FROM produk WHERE id=?";
  
} else if ($_proses == "Simpan") {

  move_uploaded_file($fileTmp,  $fileDestination);
  // create data
  $sql = "INSERT INTO produk (kode,nama,image,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk) VALUES (?,?,?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
  // update data
  $_idedit = $_POST['idedit'];
  

   // Get the old image filename
  $getImage = "SELECT image FROM produk WHERE id=?";
  $stmt = $dbh->prepare($getImage);
  $stmt->execute(array($_idedit));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  $oldImgName = $row['image'];

  // If a new image is uploaded, delete the old image and upload the new one
  unlink("uploads/".$oldImgName);
  move_uploaded_file($fileTmp,  $fileDestination);

  $ar_data[] = $_idedit;

  $sql = "UPDATE produk SET kode=?,nama=?,image=?,harga_jual=?,harga_beli=?,stok=?,min_stok=?,deskripsi=?,kategori_produk=? WHERE id=?";


}
if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
}

header('location: ../index.php?page=database/list_produk.php');

?>
