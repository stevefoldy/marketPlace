<?php
include("connection.php");
error_reporting(0);

$_GET['id'];
$_GET['productName'];
$_GET['productDesc'];
$_GET['grossPrice'];
$_GET['sku'];
$_GET['quantitySum'];
?>

<div class="row">
    <div class="col-12">
        <?php echo $_GET['productName']; ?>
    </div>
    <div class="col-6">
        <form action="" class="mp-needs-validation" method="GET" novalidate>
            <div class="mb-0">
                <input name="id" value="<?php echo $_GET['id']; ?>" class="form-control" aria-describedby="productId" type="hidden">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productNameId">Termék neve:</span>
                </div>
                <input type="text" name="productName" value="<?php echo $_GET['productName']; ?>" class="form-control" aria-describedby="productNameId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productDescId">Termék leírása:</span>
                </div>
                <textarea type="text" name="productDesc" value="<?php echo $_GET['productDesc']; ?>" class="form-control" aria-describedby="productDescId" required><?php echo $_GET['productDesc']; ?></textarea>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productGrossPriceId">Bruttó ár:</span>
                </div>
                <input type="text" name="grossPrice" value="<?php echo $_GET['grossPrice']; ?>" class="form-control" aria-describedby="productGrossPriceId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productSkuId">Cikkszám:</span>
                </div>
                <input type="text" name="sku" value="<?php echo $_GET['sku']; ?>" class="form-control" aria-describedby="productSkuId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text font-weight-bold" id="productQuantitySumId">Mennyiség:</span>
                </div>
                <input type="text" name="quantitySum" value="<?php echo $_GET['quantitySum']; ?>" class="form-control" aria-describedby="productQuantitySumId" required>
                <div class="invalid-feedback">
                    Mező kitöltése kötelező
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Frissítés">
            </div>
        </form>
    </div>
</div>

<?php
if ($_GET['submit']) // ha megtörtént a gombnyomás, átvesszük az értékeket és betöltjük az adabázisba (frissítés)
{
    $id = $_GET['id'];
    $productName = $_GET['productName'];
    $productDesc = $_GET['productDesc'];
    $grossPrice = $_GET['grossPrice'];
    $sku = $_GET['sku'];
    $quantitySum = $_GET['quantitySum'];

    $query = "UPDATE PRODUCT SET PRODUCTNAME='$productName' , PRODUCTDESC='$productDesc' , GROSSPRICE='$grossPrice', SKU='$sku', QUANTITYSUM='$quantitySum' WHERE id='$id'";
    $data = mysqli_query($conn, $query); //kapcsolat illetve hová,mit

    if ($data) {
        echo "<font color='green'>Rekord frissítve! <a href=products.php>Nézd meg a frissített listát</a>";
    }
    else
    {
        echo "<font color='red'>Rekord nincs frissítve! <a href=products.php>Nézd meg a listát</a>";
    }

}
else
{
    echo "<font color='blue'>Nyomj a Frissítés gombra a változtatások mentéséhez";
}

?>
