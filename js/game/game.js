/**
 * Asteroids, the Game
 */
var useDatabase;
window.Asteroids = (function(){
    var canvas, ct, player, lastGameTick, canvasW, canvasH, showScore, posturl;

    var init = function(can, width, height, _showScore, _useDatabase, _posturl) {
        canvasW = width;
        canvasH = height;
        showScore = _showScore || false;
        useDatabase = _useDatabase || false;
        posturl = _posturl || "index.php";

        canvas = document.getElementById(can);
        ct = canvas.getContext("2d");
        ct.lineWidth = 1;
        ct.strokeStyle = "hsla(0, 0%, 100%, 1)";

        player = new Player(15, 30, new Vector(canvasW/2, canvasH/2), new Vector(2, 2), 0);
        boulders = new Boulders(20, player, canvasW, canvasH);
    };

    var update = function() {
        player.update(canvasW, canvasH);
        boulders.update(canvasW, canvasH, player);
        player.stayInArea(canvasW, canvasH);
    };

    var render = function() {
        ct.clearRect(0, 0, canvasW, canvasH);
        player.draw(ct);
        boulders.draw(ct);

        if (showScore) {
            var _score = document.getElementById("gameScore");
            _score.innerHTML = "Poäng: " + score;
        }
    };

    var gameLoop = function() {
        if (gameOver == 2) {
            ct.font = "40px Josefin Slab";
            ct.fillStyle = "#FF7E7E";
            ct.strokeStyle = "black";

            if (useDatabase) {
                var text = "Du förlorade, tryck på retur för att försöka igen!!";
                ct.strokeText(text, 150, 300);
                ct.fillText(text, 150, 300);

                ct.font = "30px Josefin Slab";
                var text = "Skriv in ditt namn och klicka på retur för att spara poängen och börja om!";
                ct.strokeText(text, 80, 350);
                ct.fillText(text, 80, 350);

                var input = new CanvasInput({
                    canvas: canvas,
                    fontSize: 18,
                    fontFamily: 'Josefin Slab',
                    fontColor: '#212121',
                    fontWeight: 'bold',
                    width: 400,
                    padding: 8,
                    borderWidth: 1,
                    borderColor: '#000',
                    borderRadius: 3,
                    boxShadow: '1px 1px 0px #fff',
                    innerShadow: '0px 0px 5px rgba(0, 0, 0, 0.5)',
                    placeHolder: 'Max 25 tecken...',
                    x: 350,
                    y: 360,
                    wrapper: document.getElementById("gameWrapper"),
                    onsubmit: function(e, self) {
                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: posturl,
                            dataType: 'json',
                            data: {
                                name: self._hiddenInput.value,
                                score: score,
                            },
                            success: function(data) {
                                if (data.success) {
                                    var divbredd = document.getElementById("modaldiv").offsetWidth;
                                    modal.open({
                                        content: data.msg,
                                        headline: "Lyckades",
                                        width: divbredd,
                                        color: "green",
                                        success: "true",
                                        size: "28px",
                                        reload: "true"
                                    });
                                } else {
                                    var divbredd = document.getElementById("modaldiv").offsetWidth;
                                    modal.open({
                                        content: data.msg,
                                        headline: "Fel",
                                        width: divbredd,
                                        color: "red",
                                        success: "false",
                                        size: "28px",
                                        reload: "false"
                                    });
                                }
                            }
                        });
                    },
                });
            } else {
                var text = "Du förlorade, tryck på mellanslag för att försöka igen!!";
                ct.strokeText(text, 150, 300);
                ct.fillText(text, 150, 300);
            }
        } else {
            lastGameTick = Date.now();
            requestAnimFrame(gameLoop);
            update();
            render();
        }
    };

    return {
        "init": init,
        "gameLoop": gameLoop
    };
})();

//inits the game
$(document).ready(function()
{
    Asteroids.init("game", 1110, 600, true, true, "post.php");
    Asteroids.gameLoop();
});

function reloadGame() {
    Asteroids.init("game", 1110, 600, true, true, "post.php");
    Asteroids.gameLoop();
}

//Prevent scrolling while playing and hitting various keys
document.onkeydown = function(event) {
    var key;
    key = event.keyCode || event.which;

    if ([32, 37, 38, 39, 40, 65, 68, 83, 87].indexOf(event.keyCode) > -1) {

        if (gameOver == 2 && key == Key.FIRE && !useDatabase) {
            gameOver = 0;
            boulders = null;
            score = 0;
            reloadGame();
        } else {
            if (gameOver == 2) {
            } else {
                event.preventDefault();
            }
        }
    }
};