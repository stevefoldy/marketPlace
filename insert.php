<?php
$page = 'products';
$title = 'Termékek hozzáadása - MarketPlace';

$contentModText = '<span>Termék hozzáadása</span>﻿';
$contentTitle = $contentModText;

ob_start();
include 'pages/items/insert_item.php';
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>