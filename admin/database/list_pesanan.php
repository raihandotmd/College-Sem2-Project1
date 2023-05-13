<?php
require_once 'dbkoneksi.php';

$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<div id="main">
  <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>List Pesanan Database</h3>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Produk</th>
                <th>Jumlah Pesanan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              foreach ($rs as $row) {
                ?>
                <tr>
                  <td>
                    <?= $nomor ?>
                  </td>
                  <td>
                    <?= $row['tanggal'] ?>
                  </td>
                  <td>
                    <?= $row['nama_pemesan'] ?>
                  </td>
                  <td>
                    <?= $row['alamat_pemesan'] ?>
                  </td>
                  <td>
                    <?= $row['no_hp'] ?>
                  </td>
                  <td>
                    <?= $row['email'] ?>
                  </td>
                  <td>
                    <?= $row['produk_id'] ?>
                  </td>
                  <td>
                    <?= $row['jumlah_pesanan'] ?>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="database/proses_pesanan.php?iddel=<?= $row['id'] ?>"
                      onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama_pemesan'] ?>?')) {return false}"><i
                        class="bi bi-trash"></i></a>
                  </td>
                </tr>
                <?php
                $nomor++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
<script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="../assets/static/js/pages/simple-datatables.js"></script>