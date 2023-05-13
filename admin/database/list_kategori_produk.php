<?php
require_once 'dbkoneksi.php';

$sql = "SELECT * FROM kategori_produk";
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
          <h3>List Kategori Produk Database</h3>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="card">
        <div class="card-header"><a class="btn btn-success my-1" href="?page=database/form_kategori_produk.php"
            role="button">Create Kategori Produk</a></div>
        <div class="card-body">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Kategori Produk</th>
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
                    <?= $row['nama'] ?>
                  </td>
                  <td>
                    <a class="btn btn-primary" href="?page=database/view_kategori_produk.php&id=<?= $row['id'] ?>"><i
                        class="bi bi-eye"></i></a>
                    <a class="btn btn-primary" href="?page=database/form_kategori_produk.php&idedit=<?= $row['id'] ?>"><i
                        class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger" href="database/proses_kategori_produk.php?iddel=<?= $row['id'] ?>"
                      onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}"><i
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