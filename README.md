## Om

Ett enkelt spel som går ut på att skjuta asteroider. De skapas på slumpade positioner och blir fler och fler för att öka svårigheten med tiden. Hur många poäng kan du få?

## Ladda ner / Krav

[jQuery](http://jquery.com/download/) version 3.* eller högre  
[CanvasInput](https://github.com/goldfire/CanvasInput) 1.2.4 eller högre (För databashantering)  
[Modal](https://github.com/krysvac/Asteroids-spel/blob/master/js/modal.js) (För databashantering)  
[Spelet](https://github.com/krysvac/Asteroids-spel/tree/master/js/game)

## Konfigurering

### Initierings-inställningar

Det finns 6st variabler du kan skicka med när du initierar spelet, id till canvas, bredd, höjd, om den ska visa poäng, om den ska ha databas samt filen att skicka requests till om du har databas.

Om du vill visa poäng behöver du ha ett element med id gameScore tillgängligt.

Med databas väljer du också namnet på filen spelet skickar requests till. En request är ett json-objekt med attributen name och score.

Koden för att initiera spelet finns redan i game.js-filen

### Utan databas

Om du vill använda spelet utan att spara poängen i en databas behöver du endast inkludera spel-filerna boulders, game, logic, player, och projectiles.

Du initierar spelet med:

<pre>                    `
$(document).ready(function()
{
    Asteroids.init("game", 1110, 600, true /* Visa eller dölja poäng */, false);
    Asteroids.gameLoop();
});`
                </pre>

### Med databas

Om du vill använda spelet med en databas initierar du spelet så här:

<pre>                    `
$(document).ready(function()
{
    Asteroids.init("game", 1110, 600, true /* Visa eller dölja poäng */, true, "post.php");
    Asteroids.gameLoop();
});`
                </pre>

post.php är filen som spelet kommer skicka requests till, i form av ett json-objekt med attributen name och score. Spelet förväntar sig ett objekt med attributen msg och success tillbaka.

## Exempel

```html
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="box" id="modaldiv">
            <div class="col-lg-12" style="overflow-x: scroll;" id="gameWrapper">
                <h2 id="gameScore"></h2>
                <canvas id="game" width='1110px' height='600'></canvas>
            </div>
        </div>
    </div>

</div>

    <script src="js/jquery.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/CanvasInput.js'></script>
    <script src='js/game/logic.js'></script>
    <script src='js/game/boulders.js'></script>
    <script src='js/game/projectiles.js'></script>
    <script src='js/game/player.js'></script>
    <script src='js/game/game.js'></script> //inits game among other things
</body>
</html>
```

## [Testa spelet](http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom10/game.php)
