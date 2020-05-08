<?php

$page = 'home';
$title = 'Admin - MarketPlace';
$contentTitle = 'Köszöntelek a Market Placen!';

ob_start();
echo "Hello steve";
$content = ob_get_contents();
ob_end_clean();

include 'template.php';

?>