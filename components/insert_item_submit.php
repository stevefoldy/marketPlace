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
                  Ez a cikszám már foglalt, kérlek másik cikszámot válassz a termékednek!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                  </button>
                </div>";
        }
    }
}
?>
