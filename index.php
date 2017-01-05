<?php
$title = "Hem";

$styles_include = array();
$styles_include[] = "kmom03_plugin/slider.css";
$styles_include[] = "syntaxHighlight/default.css";

require "include/header.php";
?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h1 class="text-header">Asteroids-spel</h1>
                
                <hr>

                <h2 class="text-subheader">Om</h2>
                <p>
                    Ett enkelt spel som går ut på att skjuta asteroider. De skapas på slumpade positioner och blir fler och fler för att öka svårigheten med tiden. Hur många poäng kan du få?
                </p>

                <h2 class="text-subheader">Ladda ner / Krav</h2>
                <p>
                    <a href="http://jquery.com/download/">jQuery</a> version 3.* eller högre <br>
                    <a href="download/slider.rar">Slider</a>
                </p>

                <h2 class="text-subheader">Användning</h2>
                <p>En slider med 2 bilder och knappar</p>
                <pre>
                    <code>
&lt;div class="slider-container slider"&gt;

    &lt;div class="items"&gt;
        &lt;img src="img/slider/img-1.JPG" alt="img-1" class="active"&gt;
        &lt;img src="img/slider/img-2.JPG" alt="img-2"&gt;
    &lt;/div&gt;

    &lt;div class="controls"&gt;
        &lt;button id="slider-prev"&gt;&laquo;&lt;/button&gt;
        &lt;button id="slider-prev"&gt;&raquo;&lt;/button&gt;
    &lt;/div&gt;

&lt;/div&gt;</code>
                </pre>

                <h2 class="text-subheader">Konfigurering</h2>
                <p>Klassen slider-container är till css-filen, sätt den på varje container för att få rätt stil.</p>
                <ul>
                    <li><code>target</code> - Behållaren som pluginen använder för att hitta bilderna. (Standard: <code>.slider</code>)</li>
                    <li><code>button</code> - Knapparna som pluginen använder, dessa läggs till som prefix till <code>-prev</code> and <code>-next</code>.
                        Om värdet sätts som null kommer programmet inte använda några knappar. (Standard: <code>#slider</code>)</li>
                    <li><code>interval</code> - Intervallen mellan bilder, satt i millisekunder. (Standard: <code>6500</code>)</li>
                </ul>

                <h2 class="text-subheader">Exempel</h2>
                <p>Detta är 2 exempel som du kan använda för bildspel. Du kan ha flera stycken genom att ändra target-klassen till en annan.</p>

                <h3 class="text-altsubheader">Standard med knappar</h3>
                <div class="slider-container slider">
                    <div class="items">
                        <img src="img/slider/pic-1.JPG" alt="image 1" class="active">
                        <img src="img/slider/pic-2.JPG" alt="image 2">
                        <img src="img/slider/pic-3.JPG" alt="image 3">
                    </div>

                    <div class="controls">
                        <button id="slider-prev"><span class="fa fa-arrow-left"></span></button>
                        <button id="slider-next"><span class="fa fa-arrow-right"></span></button>
                    </div>
                </div>
                <br>
                <pre>
                    <code>
createSlider({
    target: '.slider',
    button: '#slider',
    interval: 6500
}).start();</code>
                </pre>

                <h3 class="text-altsubheader">Standard utan knappar</h3>
                <div class="slider-container slider-no-buttons">
                    <div class="items">
                        <img src="img/slider/pic-1.JPG" alt="image 1" class="active">
                        <img src="img/slider/pic-2.JPG" alt="image 2">
                        <img src="img/slider/pic-3.JPG" alt="image 3">
                    </div>
                </div>
                <br>
                <pre>
                    <code>
createSlider({
    target: '.slider',
    button: null,
    interval: 6500
}).start();</code>
                </pre>
            </div>
        </div>
    </div>

</div>

<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);

$scripts_include = array();
$scripts_include[] = "kmom03_plugin/slider.js";
$scripts_include[] = "syntaxHighlight.js";
$scripts_include[] = "kmom03_plugin/init.js";
require "include/footer.php";
?>