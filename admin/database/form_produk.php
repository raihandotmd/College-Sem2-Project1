<?php
require_once 'dbkoneksi.php';

?>

<div id="main">
    <div class="card">
        <div class="card-header pb-0">
            <h4 class="card-title">Form Kategori Produk</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" action="database/proses_produk.php" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Kode</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Kode Produk"
                                            id="first-name-horizontal-icon" name="kode" />
                                        <div class="form-control-icon">
                                        <i class="bi bi-list-ul"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email-horizontal-icon">Nama</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Nama Produk"
                                            id="email-horizontal-icon" name="nama" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password-horizontal-icon">Harga Beli</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="number" class="form-control" placeholder="Harga Beli Produk"
                                            id="password-horizontal-icon" name="harga_beli" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-wallet2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password-horizontal-icon">Stok</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="number" class="form-control" placeholder="Stok Produk"
                                            id="password-horizontal-icon" name="stok" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-stack"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password-horizontal-icon">Minimal Stok</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="number" class="form-control" placeholder="Minimal Stok Produk"
                                            id="password-horizontal-icon" name="min_stok" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-layers-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password-horizontal-icon">Deskripsi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Deskripsi Produk"
                                            id="password-horizontal-icon" name="deskripsi" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password-horizontal-icon">Kategori Produk</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <?php
                                        $sqljenis = "SELECT * FROM kategori_produk";
                                        $rsjenis = $dbh->query($sqljenis);
                                        ?>
                                        <fieldset class="form-group">
                                        <select name="kategori_produk" class="form-select">
                                            <?php
                                            foreach ($rsjenis as $rowjenis) {
                                                ?>
                                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Image</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <!-- File uploader with validation -->
                                        <input name="file" type="file" required
                                            data-max-file-size="1MB" data-max-files="3" accept=".jpg, .jpeg, .png" />
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_GET['idedit'])) { ?>
                                <input type="hidden" name="idedit" value="<?php echo $_GET['idedit']; // send variable idedit
                                    ?>">
                            <?php } ?>
                            <div class="col-12 d-flex justify-content-between">
                                <a class="btn btn-danger me-1 mb-1" href="?page=database/list_produk.php">Go Back</a>
                                <div class="group">
                                    <button name="proses" type="submit" class="btn btn-primary me-1 mb-1" value="<?php if (isset($_GET['idedit'])) {
                                        echo 'Update';
                                    } else {
                                        echo 'Simpan';
                                    } ?>">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- // Basic Vertical form layout section end -->