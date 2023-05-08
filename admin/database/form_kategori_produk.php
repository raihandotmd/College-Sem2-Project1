<div id="main">
  <div class="card">
    <div class="card-header pb-0">
      <h4 class="card-title">Form Kategori Produk</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <form class="form form-vertical" method="POST" action="database/proses_kategori_produk.php"  >
          <div class="form-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group has-icon-left">
                  <label for="first-name-icon">Nama Kategori</label>
                  <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Kategori Produk" id="first-name-icon"
                      name="nama" />
                    <div class="form-control-icon">
                      <i class="bi bi-card-list"></i>
                    </div>
                  </div>
                </div>
              </div>
              <?php if (isset($_GET['idedit'])) { ?>
                <input type="hidden" name="idedit" value="<?php echo $_GET['idedit']; // send variable idedit
                  ?>">
              <?php } ?>
              <div class="col-12 d-flex justify-content-between">
                <a class="btn btn-danger me-1 mb-1" href="?page=database/list_kategori_produk.php">Go Back</a>
                <div class="group">
                  <button name="proses" type="submit" class="btn btn-primary me-1 mb-1" 
                  value="<?php if(isset($_GET['idedit'])) {
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