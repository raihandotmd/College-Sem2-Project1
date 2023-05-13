<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>


<div id="main">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-lg">
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td><?= $row['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Kode</td>
                                <td><?= $row['kode'] ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><?= $row['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><?= $row['image'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><?= $row['harga_jual'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td><?= $row['harga_beli'] ?></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><?= $row['stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Minimal Stok</td>
                                <td><?= $row['min_stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?= $row['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td>Kategori Produk</td>
                                <td><?= $row['kategori_produk'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-danger" href="?page=database/list_produk.php" role="button">Go Back</a>
                </div>
            </div>
        </div>
    </div>
