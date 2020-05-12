<?php
include("connection.php");
error_reporting(0);
?>
<div class="row mp-form-wrapper">
    <div class="col-12 col-lg-6 mp-form-col">
        <form class="mp-needs-validation" action="" method="GET" novalidate>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productNameId">Termék neve:</span>
                </div>
                <input type="text" name="productName" value="" class="form-control" aria-describedby="productNameId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold align-items-start" id="productDescId">Termék leírása:</span>
                </div>
                <textarea type="text" name="productDesc" value="" class="form-control mp-product-textarea" aria-describedby="productDescId" required></textarea>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productGrossPriceId">Bruttó ár:</span>
                </div>
                <input type="text" name="grossPrice" value="" class="form-control" aria-describedby="productGrossPriceId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productSkuId">Cikkszám:</span>
                </div>
                <input type="text" name="sku" value="" class="form-control" aria-describedby="productSkuId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productQuantitySumId">Mennyiség:</span>
                </div>
                <input type="text" name="quantitySum" value="" class="form-control" aria-describedby="productQuantitySumId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center mb-3 row">
                <div class="col-auto d-flex justify-content-end">
                    <?php include "components/insert_item_submit.php" ?>
                </div>
                <div class="col-auto d-flex justify-content-end">
                 <input type="submit" class="btn btn-primary" name="submit" value="Mentés">
                </div>
            </div>
        </form>
    </div>
</div>

