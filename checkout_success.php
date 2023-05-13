<?php

require_once 'admin/dbkoneksi.php';


if (isset($_POST['proses'])) {
  $_proses = $_POST['proses'];
  

  $date = date('Y-m-d H:i:s');
  $_nama_pemesan = $_POST['name'];
  $_alamat_pemesan = $_POST['address'];
  $_no_hp = $_POST['phone_number'];
  $_email = $_POST['email'];
  $_jumlah_pesanan = $_POST['quantity'];
  $_deskripsi = $_POST['deskripsi'];
  $_produk_id = $_POST['produk_id'];


  $ar_data[] = $date; // 1
  $ar_data[] = $_nama_pemesan; // 2
  $ar_data[] = $_alamat_pemesan; // 3
  $ar_data[] = $_no_hp; // 4
  $ar_data[] = $_email; // 5
  $ar_data[] = $_jumlah_pesanan; // 6
  $ar_data[] = $_deskripsi; // 7
  $ar_data[] = $_produk_id; // 8

  // create data
  $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";

}

if (isset($sql)) {
  $st = $dbh->prepare($sql);
  $st->execute($ar_data);
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<main class="vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="group p-lg-5 p-4 w-50 text-center">
        <div class="wrapper w-auto text-success">
            <i class="bi bi-check-circle fw-bolder " style="font-size: 5em;"></i>
            <p class="fs-2 w-auto">Checkout Success!</p>
        </div>
        <a class="btn btn-primary w-50" href="index.php">Back To Website</a>
    </div>
</main>
