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
                <h3>DataTable</h3>
                <p class="text-subtitle text-muted">
                  A sortable, searchable, paginated table without dependencies
                  thanks to simple-datatables.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      DataTable
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          
          <section class="section">
            <div class="card">
              <div class="card-header">Simple Datatable</div>
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
                                    <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                                    <a class="btn btn-primary" href="form_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="proses_pelanggan.php?iddel=<?= $row['id'] ?>"
                                        onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama_pemesan'] ?>?')) {return false}">Delete</a>
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

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"
                  ><i class="bi bi-heart-fill icon-mid"></i
                ></span>
                by <a href="https://saugi.me">Saugi</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="../assets/static/js/pages/simple-datatables.js"></script>