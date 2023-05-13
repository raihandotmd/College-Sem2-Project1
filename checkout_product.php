<?php
require_once 'admin/dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>


<main class="mb-5 container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h2>Checkout form</h2>
        <p class="lead">Please put in your valid information correctly.</p>
    </div>
    <form class="needs-validation" method="POST" action="checkout_success.php" id="formCheckout">
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your cart</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product Name</h6>
                            <small class="text-body-secondary">
                                <?= $row['nama'] ?>
                            </small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product Description</h6>
                            <small class="text-body-secondary">
                                <?= $row['deskripsi'] ?>
                            </small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="my-0">Quantity (max 10)</span>
                        <div class="quantity-wrapper">
                            <button type="button" onclick="decrementValue()"
                                style="background-color: transparent;border:0;">-</button>
                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="quantity"
                                style="width: 2.5em;padding:0em 0.5em;border-radius:0.3em; border:0.5px solid black" readonly/>
                            <button type="button" onclick="incrementValue()"
                                style="background-color: transparent;border:0;">+</button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>
                            $<span id="totalCost"></span>
                        </strong>
                    </li>
                </ul>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Your Information</h4>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="firstName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name"
                            value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="lastName" class="form-label">Address</label>
                        <input type="text" class="form-control" id="lastName" name="address" placeholder="Your Address"
                            value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Phone Number</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Only Numbers" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Notes <span
                                class="text-body-secondary">(Optional)</span></label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            placeholder="Color Blue, Silver, Black">
                    </div>

                    <hr class="my-4">

                    <input type="hidden" name="produk_id" value="<?= $_GET['id'] ?>">
                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="proses" value="simpan">Continue to
                        checkout</button>
                </div>
            </div>
    </form>
</main>
<script type="text/javascript">

    const quantityInput = document.getElementById("quantity");
    const totalCostOutput = document.getElementById("totalCost");
    const productPrice = <?= $row['harga_jual'] ?>;
    totalCostOutput.textContent = productPrice;

    function totalPrice() {
        let quantity = parseInt(quantityInput.value);
        let totalCost = quantity * productPrice;
        totalCostOutput.textContent = totalCost.toFixed(2);
    }

    quantityInput.addEventListener("input", () => {
        totalPrice();
    });



    function incrementValue() {
        let value = parseInt(quantityInput.value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            quantityInput.value = value;
        }
        totalPrice();
    }
    function decrementValue() {
        let value = parseInt(quantityInput.value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            quantityInput.value = value;
        }
        totalPrice();
    }
</script>