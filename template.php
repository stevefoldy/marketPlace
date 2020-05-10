<!doctype html>
<html lang="hu">
    <head>
        <?php include 'components/pagehead.php'; ?>
    </head>
    <body onload="mpLoader()" style="height: 100vh">
        <div id="mp-loader">
            <div class="mp-loader-icon"></div>
            <div class="mp-loader-icon-sm"></div>
        </div>
        <?php include 'components/header.php'; ?>
        <main style="opacity: 0" id="mpMain">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mp-column-left">
                        <?php include 'components/navbar.php'; ?>
                    </div>
                    <div class="col-10 mp-column-right px-5 pt-4 pb-5">
                        <div class="mp-page-content">
                            <div class="mp-page-head">
                                <h2 class="mp-page-title"><?php echo $contentTitle; ?></h2>
                            </div>
                            <?php
                                echo ($content);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'scripts.php'; ?>
    </body>
</html>