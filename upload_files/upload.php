<?php
if (isset($_POST['submit'])) {
    $target = "upload_files/uploads/";
    $file_name = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];

    if (!preg_match('/(gif|jpe?g|png)$/i', $file_name))
    {
        echo "Rossz fajltipus!";
    } else {
        move_uploaded_file($tmp_dir, $target . $file_name);
        $feltoltve = true;
    }
}
?>

<div class="row">
    <div class="col-12">
        <form enctype="multipart/form-data" action="" method="post"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/> <!--a feltöltött file maximális mérete 3mb-->
        <label for="file"> Válassz egy fájlt!</label><input id="file" type="file" name="file"/>
        <input type="submit" name="submit" value="Feltöltés!"/>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php
            if ($feltoltve) {
                $utvonal = $target . $file_name;
                echo "Sikeresen feltöltötted a képet, megnézheted <a href='$utvonal'>itt</a>!";
            }
            ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
