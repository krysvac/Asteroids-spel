<?php
$title = "Hem";

$styles_include = array();
$styles_include[] = "syntaxHighlight/default.css";

require "include/header.php";
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h1 class="text-header">Asteroids-spel</h1>
                
                <hr>

                <h2>Om</h2>
                <p>
                    Ett enkelt spel som går ut på att skjuta asteroider. De skapas på slumpade positioner och blir fler och fler för att öka svårigheten med tiden. Hur många poäng kan du få?
                </p>

                <h2>Ladda ner / Krav</h2>
                <p>
                    <a href="http://jquery.com/download/">jQuery</a> version 3.* eller högre <br>
                    <a href="https://github.com/goldfire/CanvasInput">CanvasInput</a> 1.2.4 eller högre (För databashantering)<br>
                    <a href="https://github.com/krysvac/Asteroids-spel/blob/master/js/modal.js">Modal</a> (För databashantering)<br>
                    <a href="https://github.com/krysvac/Asteroids-spel/tree/master/js/game">Spelet</a>
                </p>

                <h2>Konfigurering</h2>

                <h3>Initierings-inställningar</h3>
                <p>Det finns 6st variabler du kan skicka med när du initierar spelet, id till canvas, bredd, höjd, om den ska visa poäng, om den ska ha databas samt filen att skicka requests till om du har databas.</p>
                <p>Om du vill visa poäng behöver du ha ett element med id gameScore tillgängligt.</p>
                <p>Med databas väljer du också namnet på filen spelet skickar requests till. En request är ett json-objekt med attributen name och score.</p>
                <p>Koden för att initiera spelet finns redan i game.js-filen</p>
                
                <h3>Utan databas</h3>
                <p>Om du vill använda spelet utan att spara poängen i en databas behöver du endast inkludera spel-filerna boulders, game, logic, player, och projectiles.</p>
                <p>Du initierar spelet med: </p>
                <pre>
                    <code>
$(document).ready(function()
{
    Asteroids.init("game", 1110, 600, true /* Visa eller dölja poäng */, false);
    Asteroids.gameLoop();
});</code>
                </pre>

                <h3>Med databas</h3>
                <p>Om du vill använda spelet med en databas initierar du spelet så här: </p>
                <pre>
                    <code>
$(document).ready(function()
{
    Asteroids.init("game", 1110, 600, true /* Visa eller dölja poäng */, true, "post.php");
    Asteroids.gameLoop();
});</code>
                </pre>
                <p>post.php är filen som spelet kommer skicka requests till, i form av ett json-objekt med attributen name och score. Spelet förväntar sig ett objekt med attributen msg och success tillbaka.</p>

                <h2>Exempel</h2>
                <pre>
                    <code>
&lt;!DOCTYPE html&gt;
&lt;html lang="sv"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;link href="css/style.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;div class="container"&gt;

    &lt;div class="row"&gt;
        &lt;div class="box" id="modaldiv"&gt;
            &lt;div class="col-lg-12" style="overflow-x: scroll;" id="gameWrapper"&gt;
                &lt;h2 id="gameScore"&gt;&lt;/h2&gt;
                &lt;canvas id="game" width='1110px' height='600'&gt;&lt;/canvas&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

&lt;/div&gt;

    &lt;script src="js/jquery.js"&gt;&lt;/script&gt;
    &lt;script src='js/modal.js'&gt;&lt;/script&gt;
    &lt;script src='js/CanvasInput.js'&gt;&lt;/script&gt;
    &lt;script src='js/game/logic.js'&gt;&lt;/script&gt;
    &lt;script src='js/game/boulders.js'&gt;&lt;/script&gt;
    &lt;script src='js/game/projectiles.js'&gt;&lt;/script&gt;
    &lt;script src='js/game/player.js'&gt;&lt;/script&gt;
    &lt;script src='js/game/game.js'&gt;&lt;/script&gt; //inits game among other things
&lt;/body&gt;
&lt;/html&gt;</code>
                </pre>
                <h2>
                    <a href="http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom10/game.php">Testa spelet</a>
                </h2>
            </div>
        </div>
    </div>

</div>

<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);

$scripts_include = array();
$scripts_include[] = "syntaxHighlight.js";
$scripts_include[] = "syntax_init.js";
require "include/footer.php";
?>