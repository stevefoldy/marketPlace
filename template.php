<!doctype html>
<html lang="en">
    <head>
        <?php include 'components/pagehead.php'; ?>
    </head>
    <body>
        <?php include 'components/header.php'; ?>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mp-column-left">
                        <?php include 'components/navbar.php'; ?>
                    </div>
                    <div class="col-10 mp-column-right px-5 pt-4 pb-5">
                        <div class="mp-page-content">
                            <div class="mp-page-head">
                                <h2 class="mp-page-title"><?php echo $content; ?></h2>
                            </div>
                            <?php
                                if($page == 'products') {
                                    include 'product_table.php';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'scripts.php'; ?>
    </body>
</html>