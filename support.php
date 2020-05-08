<?php

$page = 'support';
$title = 'Termékek - MarketPlace';
$contentTitle = 'Segítség';

ob_start();
echo "Ez a support oldal!";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>
