<?php

require_once '../dbkoneksi.php';


if (isset($_GET['iddel'])) {
  // delete data
  $_idData = $_GET['iddel'];
  $ar_data[] = $_idData;
  $sql = "DELETE FROM pesanan WHERE id=?";
  
}

if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
  header('location: ../index.php?page=database/list_pesanan.php');
}


?>