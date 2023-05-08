<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>


<div id="main">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Table with outer spacing</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <p class="card-text">
                    Using the most basic table up, here’s how
                    <code>.table</code>-based tables look in Bootstrap. You
                    can use any example of below table for your table and it
                    can be use with any type of bootstrap tables.
                </p>
                <!-- Table with outer spacing -->
                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>
                                <td>
                                    <?= $row['nama'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-danger" href="?page=database/list_kategori_produk.php" role="button">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>