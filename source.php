<?php
$styles_include = array();
$styles_include[] = "CSource.css";

$title = "Källkod";
require "include/header.php";
require "include/CSource.php";

$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
?>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h1 class="text-header">Källkod</h1>
                <hr>
                <?php echo $source->view(); ?>
            </div>
        </div>
    </div>

</div>

<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);
require "include/footer.php";
?>