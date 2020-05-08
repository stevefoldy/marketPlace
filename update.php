﻿<?php

$page = 'products';
$title = 'Termékek szerkesztése - MarketPlace';
$contentTitle = 'Termék módosítása';

ob_start();
include 'update_item.php';
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>
