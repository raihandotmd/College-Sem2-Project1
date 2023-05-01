<?php

require_once '../dbkoneksi.php';


if (isset($_POST['proses'])) {
  $_proses = $_POST['proses'];
  $_nama = $_POST['nama'];

}

if (isset($_GET['iddel']) && empty($_proses)) {
  // delete data
  $ar_data[] = $_GET['iddel'];
  $sql = "DELETE FROM kategori_produk WHERE id=?";
  
} else if ($_proses == "Simpan") {
  // create data
  $ar_data[] = $_nama;
  $sql = "INSERT INTO kategori_produk (nama) VALUES (?)";
} else if ($_proses == "Update") {
  // update data
  $ar_data[] = $_nama;
  $ar_data[] = $_POST['idedit'];
  $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
}

header('location: ../index.php?page=database/list_kategori_produk.php');

?>
