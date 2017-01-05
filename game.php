<?php
$title = "Asteroids-spel";

$styles_include = array();

require "include/header.php";
?>

<div class="container">

    <div class="row">
        <div class="box" id="modaldiv">
            <div class="col-lg-12" style="overflow-x: scroll;" id="gameWrapper">
                <h1 class="text-header">Asteroids-spel</h1>
                <hr>
                <h2 class="text-subheader">Ladda om sidan för att starta om spelet</h2>
                <h3>Kontroller är <code>w</code>, <code>a</code>, <code>s</code>, <code>d</code> eller <code>piltangenter</code> för att styra och <code>space</code> för att skjuta</h3>
                <h2 id="gameScore"></h2>
                <canvas id="game" width='1110px' height='600'></canvas>
            </div>
        </div>
    </div>

</div>

<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);

$scripts_include = array();
$scripts_include[] = "jodu15.js";
$scripts_include[] = "modal.js";
$scripts_include[] = "CanvasInput.js";
$scripts_include[] = "game/logic.js";
$scripts_include[] = "game/boulders.js";
$scripts_include[] = "game/projectiles.js";
$scripts_include[] = "game/player.js";
$scripts_include[] = "game/game.js";
require "include/footer.php";
?>