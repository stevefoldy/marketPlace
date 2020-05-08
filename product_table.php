<?php

$page = 'products';
$title = 'Termékek - MarketPlace';
$content = 'Termékek';

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
                <div class="col-auto mp-table-th" style='max-width: 40px'>ID</div>
                <div class="col-auto mp-table-th">Termék</div>
                <div class="col-auto mp-table-th">Termék leírás</div>
                <div class="col-auto mp-table-th text-right">Bruttó ár</div>
                <div class="col-auto mp-table-th text-right">Cikkszám</div>
                <div class="col-auto mp-table-th text-right">Mennyiség</div>
                <div class="col-auto mp-table-th text-center">Műveletek</div>
            </div>
        </div>
        <div class="mp-table-tbody">
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<div class='row mp-table-tr'>
                <div class='col-auto mp-table-td' style='max-width: 40px'>" . $result['id'] . "</div>
                <div class='col-auto mp-table-td font-weight-bold'><a href='update.php?id=$result[id]&productName=$result[productname]&productDesc=$result[productDesc]&grossPrice=$result[grossPrice]&sku=$result[sku]&quantitySum=$result[quantitySum]'>" . $result['productName'] . "</a></div>
                <div class='col-auto mp-table-td text-truncate' style='max-width: 400px'>" . $result['productDesc'] . "</div>
                <div class='col-auto mp-table-td text-right font-weight-bold'>" . $result['grossPrice'] . " Ft</div>
                <div class='col-auto mp-table-td text-right'>" . $result['sku'] . "</div>
                <div class='col-auto mp-table-td text-right'>" . $result['quantitySum'] . "</div>
                <div class='col-auto mp-table-td text-right'>
                    <div class='mp-actions-box'>
                        <a class='ms-action ms-update animated' href='update.php?id=$result[id]&productName=$result[productname]&productDesc=$result[productDesc]&grossPrice=$result[grossPrice]&sku=$result[sku]&quantitySum=$result[quantitySum]' title='Módosítás'><i class='far fa-edit'></i></a>
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


