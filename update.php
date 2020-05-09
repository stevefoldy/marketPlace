﻿<?php

$page = 'products';
$title = 'Termékek szerkesztése - MarketPlace';

$contentModText = '<span>Termék módosítása</span>﻿';
$contentProductName = $_GET['productName'];

$contentTitle = $contentModText . ' - ' . $contentProductName;

ob_start();
include 'update_item.php';
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>
