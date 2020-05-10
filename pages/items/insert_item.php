<?php
include("connection.php");
error_reporting(0);
?>
<div class="row">
    <div class="col-6">
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
                    <span class="input-group-text font-weight-bold" id="productDescId">Termék leírása:</span>
                </div>
                <textarea type="text" name="productDesc" value="" class="form-control" aria-describedby="productDescId" required></textarea>
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
            <div class="d-flex justify-content-end mb-3">
                <input type="submit" class="btn btn-primary" name="submit" value="Mentés">
            </div>
        </form>
    </div>
</div>
<?php
if ($_GET['submit']) {
    $productName = $_GET['productName'];
    $productDesc = $_GET['productDesc'];
    $grossPrice = $_GET['grossPrice'];
    $sku = $_GET['sku'];
    $quantitySum = $_GET['quantitySum'];

    if ($productName != "" && $productDesc != "" && $grossPrice != "" && $sku != "" && $quantitySum != "") {
        $query = "INSERT INTO PRODUCT (id, productName, productDesc, grossPrice, sku, quantitySum) VALUES ('Null','$productName', '$productDesc', '$grossPrice', '$sku', '$quantitySum')";
        $data = mysqli_query($conn, $query);
        if ($data) {
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=/products.php">
            <?php
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  A terméked feltöltése sikeresen megtörtént!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                  </button>
                </div>";
        } else {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  Nem vehetsz fel terméket azonos cikkszámmal!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                  </button>
                </div>";
        }
    }
}
?>

