var gameOver = 0;
var boulders;
var score = 0;
/** 
 * Shim layer, polyfill, for requestAnimationFrame with setTimeout fallback.
 * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 */ 
window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame       || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame    || 
            window.oRequestAnimationFrame      || 
            window.msRequestAnimationFrame     || 
            function(callback){
                window.setTimeout(callback, 1000 / 60);
            };
})();



/**
 * Shim layer, polyfill, for cancelAnimationFrame with setTimeout fallback.
 */
window.cancelRequestAnimFrame = (function(){
    return  window.cancelRequestAnimationFrame || 
            window.webkitCancelRequestAnimationFrame || 
            window.mozCancelRequestAnimationFrame    || 
            window.oCancelRequestAnimationFrame      || 
            window.msCancelRequestAnimationFrame     || 
            window.clearTimeout;
})();



/**
 * True prototypal inheritance by Douglas Crockford.
 * http://javascript.crockford.com/prototypal.html
 */
Object.create = function (o) {
    function F() {}
    F.prototype = o;
    return new F();
};
//newObject = Object.create(oldObject);

/**
 * Trace the keys pressed
 * http://nokarma.org/2011/02/27/javascript-game-development-keyboard-input/index.html
 */
window.Key = {
    pressed: {},

    LEFT:   37,
    UP:     38,
    RIGHT:  39,
    DOWN:   40,
    FIRE:   32, //Space, also used for restart
    W:      87,
    A:      65,
    S:      83,
    D:      68,
    ENTER:  13,

    isDown: function(keyCode, keyCode1) {
        return this.pressed[keyCode] || this.pressed[keyCode1];
    },

    onKeydown: function(event) {
        this.pressed[event.keyCode] = true;
    },

    onKeyup: function(event) {
        delete this.pressed[event.keyCode];
    }
};
window.addEventListener("keyup",   function(event) { Key.onKeyup(event); },   false);
window.addEventListener("keydown", function(event) { Key.onKeydown(event); }, false);

function Vector(x, y) {
    this.x = x || 0;
    this.y = y || 0;
}

var gameOver = 0; //gamestate, 2 = loss
var boulders = null;
var score = 0;