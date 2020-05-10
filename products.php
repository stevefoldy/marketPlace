<?php

$page = 'products';
$title = 'Termékek - MarketPlace';
$contentTitle = 'Termékek';

ob_start();
include 'pages/tables/product_table.php';
$content = ob_get_contents();
ob_end_clean();

include 'template.php';
?>
