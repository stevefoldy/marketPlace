<?php

include ("connection.php");
error_reporting(0);

$id = $_GET['id'];

$query = "DELETE FROM PRODUCT WHERE ID='$id'";

$data = mysqli_query($conn, $query);

if($data) {
    echo "<script>
            alert('A termék sikeresen törölve lett!')
        </script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://marketplace.steve/index.php">
    <?php
} else {
    echo "<div class='alert alert-danger' role='alert'>Sajnos a rekordot nem sikerült törölni!</div>";
}
?>