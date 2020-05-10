<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "marketplace_db";
$conn = mysqli_connect($servename, $username, $password, $dbname);

if (!$conn) {
    die("Nincs kapcsolat, mert " . mysqli_error($conn));
} else {
    echo "<div class='mp-page-head-info d-flex justify-content-end align-items-center mb-4'>";
    echo "<div type='button' class='mr-4' data-toggle='tooltip' data-placement='left' title='Adatbáziskapcsolat rendben, elkezdheted a termékek feltöltését!'><i class='fas fa-info-circle text-primary'></i></div>";
    include 'components/add_new_button.php';
    echo "</div>";
}

?>
