<?php
$title = "Hem";

$styles_include = array();
$styles_include[] = "jquery.dynatable.css";

require "include/header.php";
?>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php 
                    $allScores = getAllScores();
                ?>
                <table id="highscores" class="table table-hover">
                    <thead>
                        <tr class="info">
                            <th><strong>Namn:</strong></th>
                            <th><strong>Poäng:</strong></th>
                            <th data-dynatable-column="played"><strong>Spelat:</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($allScores as $score) {
                                echo "
                                <tr>
                                    <td>".$score->username."</td>
                                    <td>".$score->score."</td>
                                    <td>".$score->played."</td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);

$scripts_include = array();
$scripts_include[] = "jquery.dynatable.js";
$scripts_include[] = "highscores_init.js";
require "include/footer.php";
?>