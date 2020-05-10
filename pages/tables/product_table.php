<?php

include("connection.php");
error_reporting(0);

$query = 'SELECT * FROM PRODUCT';
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if ($total != 0){
?>
<div class="container-fluid mt-4 px-0">
    <div class="mp-table">
        <div class="mp-table-thead">
            <div class="row mp-table-tr">
                <div class="col-auto mp-table-th mp-table-id" style='max-width: 40px'>ID</div>
                <div class="col-auto mp-table-th">Termék</div>
                <div class="col-auto mp-table-th mp-table-td-product-desc">Termék leírás</div>
                <div class="col-auto mp-table-th text-right mp-table-td-gross-price">Bruttó ár</div>
                <div class="col-auto mp-table-th text-right mp-table-td-sku">Cikkszám</div>
                <div class="col-auto mp-table-th text-right mp-table-td-quantitySum">Mennyiség</div>
                <div class="col-auto mp-table-th text-right text-md-center">Műveletek</div>
            </div>
        </div>
        <div class="mp-table-tbody">
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row mp-table-tr'>
                <div class='col-auto mp-table-td mp-table-id' style='max-width: 40px'>" . $result['id'] . "</div>
                <div class='col-auto mp-table-td text-truncate font-weight-bold mp-table-td-product-name' title='$result[productName]'><a href='update.php?id=$result[id]&productName=$result[productName]&productDesc=$result[productDesc]&grossPrice=$result[grossPrice]&sku=$result[sku]&quantitySum=$result[quantitySum]'>" . $result['productName'] . "</a></div>
                <div class='col-auto mp-table-td text-truncate mp-table-td-product-desc' title='$result[productDesc]'>" . $result['productDesc'] . "</div>
                <div class='col-auto mp-table-td text-right font-weight-bold mp-table-td-gross-price'>" . $result['grossPrice'] . " Ft</div>
                <div class='col-auto mp-table-td text-right mp-table-td-sku'>" . $result['sku'] . "</div>
                <div class='col-auto mp-table-td text-right mp-table-td-quantitySum'>" . $result['quantitySum'] . "</div>
                <div class='col-auto mp-table-td text-right'>
                    <div class='mp-actions-box'>
                        <a class='ms-action ms-update animated' href='update.php?id=$result[id]&productName=$result[productName]&productDesc=$result[productDesc]&grossPrice=$result[grossPrice]&sku=$result[sku]&quantitySum=$result[quantitySum]' title='Módosítás'><i class='far fa-edit'></i></a>
                        <a class='ms-action ms-delete animated' href='delete.php?id=$result[id]'onclick='return checkdelete()' title='Törlés'><i class='far fa-trash-alt'></i></a>
                    </div>
                </div>
              </div>";
            }
            } else {
                echo "<div class='mp-upload-content position-relative'>
                <i class='fas fa-cloud-upload-alt'></i>
                <div class='mp-upload-text mt-3'>
                Töltsd fel az eslő termékedet!</div>
                </div>";
            }
            ?>
        </div>
    </div>
</div>
<script>
    function checkdelete() {
        return confirm('Szeretnéd törölni az adott recordot?');
    }
</script>


