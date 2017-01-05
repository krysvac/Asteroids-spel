/**
 * A Player as an object.
 */
function Player(pWidth, pHeight, position, velocity, direction) {
    this.pWidth     = pWidth     || 32;
    this.pHeight    = pHeight    || 32;
    this.position   = position   || new Vector(0, 0);
    this.velocity   = velocity   || new Vector(1, 1);
    this.direction  = direction  || 0;
    this.acceleration = 0;
    this.projectiles = new Projectiles();
    this.coolDown = 0;
}

Player.prototype.draw = function(ct) {
    var x = this.pWidth/2,
    y = this.pHeight/2;

    ct.save();
    ct.translate(this.position.x, this.position.y);
    ct.rotate(this.direction + Math.PI/2);
    ct.beginPath();
    ct.moveTo(0, -y);
    ct.lineTo(x, y);
    ct.lineTo(0, 0.8 * y);
    ct.lineTo(-x, y);
    ct.lineTo(0, -y);

    if (Key.isDown(Key.UP, Key.W)) {
        ct.moveTo(0, y);
        ct.lineTo(-2, y + 10);
        ct.lineTo(0, y + 8);
        ct.lineTo(2, y + 10);
        ct.lineTo(0, y);
    } 

    if (Key.isDown(Key.DOWN, Key.S)) {
        ct.moveTo(y + 4, 0);
        ct.arc(0, 0, y + 4, 0, Math.PI, true);
    }

    ct.stroke();
    ct.restore();
    this.projectiles.draw(ct);
};

Player.prototype.moveLeft = function() {
    this.position.x -= 1 * this.velocity.x;
};

Player.prototype.moveRight = function() {
    this.position.x += 1 * this.velocity.x;
};

Player.prototype.moveUp = function() {
    this.position.y -= 1 * this.velocity.y;
};

Player.prototype.moveDown = function() {
    this.position.y += 1 * this.velocity.y;
};

Player.prototype.moveForward = function() {
    this.position.x += this.velocity.x * this.acceleration * Math.cos(this.direction);
    this.position.y += this.velocity.y * this.acceleration * Math.sin(this.direction);
};

Player.prototype.moveBackward = function() {
    this.position.x -= this.velocity.x * Math.cos(this.direction);
    this.position.y += this.velocity.y * Math.sin(-this.direction);
};

Player.prototype.rotateLeft = function() {
    this.direction -= Math.PI/30;
};

Player.prototype.rotateRight = function() {
    this.direction += Math.PI/30;
};

Player.prototype.throttle = function() {
    this.acceleration += this.acceleration > 2 ? 0 : 0.2;
};

Player.prototype.brake = function() {
    this.acceleration -= 0.020;
    this.acceleration = this.acceleration > 0 ? this.acceleration  : 0;
};

Player.prototype.fire = function() {
    if (this.coolDown !== 0) {
        this.coolDown -= 1;
    } else {
        this.projectiles.fire(5, new Vector(this.position.x, this.position.y), this.direction);
        this.coolDown = 10;
    }
};

Player.prototype.update = function(width, height) {
    this.acceleration -= this.acceleration * 0.020;
    this.moveForward();
    if (Key.isDown(Key.UP, Key.W))      this.throttle();
    if (Key.isDown(Key.LEFT, Key.A))    this.rotateLeft();
    if (Key.isDown(Key.DOWN, Key.S))    this.brake();
    if (Key.isDown(Key.RIGHT, Key.D))   this.rotateRight();
    if (Key.isDown(Key.FIRE))   this.fire();

    this.projectiles.update(width, height);
};

Player.prototype.stayInArea = function(width, height) {
    if(this.position.y < -this.pHeight)  this.position.y = height;
    if(this.position.y > height)        this.position.y = -this.pHeight;
    if(this.position.x > width)         this.position.x = -this.pWidth;
    if(this.position.x < -this.pWidth)   this.position.x = width;
};

Player.prototype.checkHit = function(boulderPos, boulderRadius) {
    var dx = boulderPos.x - this.position.x,
        dy = boulderPos.y - this.position.y,
        dist = Math.sqrt(dx*dx + dy*dy);

    if (dist < boulderRadius+5) {
        gameOver = 2;
    }
};