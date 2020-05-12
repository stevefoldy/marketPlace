<?php
    if ($_GET['submit'])
    {
        $id = $_GET['id'];
        $productName = $_GET['productName'];
        $productDesc = $_GET['productDesc'];
        $grossPrice = $_GET['grossPrice'];
        $sku = $_GET['sku'];
        $quantitySum = $_GET['quantitySum'];

        $query = "UPDATE PRODUCT SET PRODUCTNAME='$productName' , PRODUCTDESC='$productDesc' , GROSSPRICE='$grossPrice', SKU='$sku', QUANTITYSUM='$quantitySum' WHERE id='$id'";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<div class='alert alert-success alert-dismissible fade show mb-3 mb-mb-0 mr-mb-4' role='alert'>
                     <div color='green'>Termék frissítve! <a href=../products.php>Nézd meg az eddig feltöltött termékeket!</a></div>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                      </button>
                    </div>
                    ";
        }
        else
        {
            echo "<div class='alert alert-danger alert-dismissible fade show mb-3 mb-mb-0 mr-mb-4' role='alert'>
                     <div color='red'>Termék frissítése sikertlen! <a href=../products.php>Nézd meg az eddig feltöltött termékeket!</a></div>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                      </button>
                    </div>
                    ";
        }

    }
    else
    {
        echo "<div type='button' class='mr-0' data-toggle='tooltip' data-placement='left' title='Nyomj a Mentés és szerkeszt gombra a változtatások mentéséhez!'><i class='fas fa-info-circle text-primary'></i></div>";
    }
?>