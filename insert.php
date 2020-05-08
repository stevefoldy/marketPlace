<?php
include("connection.php");
error_reporting(0);
?>
<form action="" method="GET">
    Termék: <input type="text" name="productName" value="" required></br>
    Termék leírása: <input type="text" name="productDesc" value="" required></br>
    Bruttó ár: <input type="text" name="grossPrice" value="" required></br>
    Cikkszám: <input type="text" name="sku" value="" required></br>
    Mennyiség: <input type="text" name="quantitySum" value="" required></br>
    <input type="submit" name="submit" value="Mentés">
</form>
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
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://marketplace.steve/index.php">
            <?php
            echo "Az adatrögzítés megtörtént!";
        } else {
            echo "Nem vehetsz fel terméket azonos cikkszámmal!";
        }
    }
}
?>