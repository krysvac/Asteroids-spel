/**
 * A Boulder.
 */
function Boulder(player, maxposX, maxposY) {
    this.hit            = false;
    this.radius         = randomnumber(15, 30);
    this.position       = new Vector(randomnumber(0, maxposX), randomnumber(0, maxposY));
    this.velocity       = new Vector(0.4, 1);
    this.direction      = randomnumber(0.01, 20);
    this.acceleration   = randomnumber(1.2, 2);
    this.player         = player;
}

Boulder.prototype.draw = function(ct) {
    if (!this.hit) {
        ct.save();
        ct.beginPath();
        ct.arc(this.position.x, this.position.y, this.radius, 0, 2*Math.PI);
        ct.stroke();
        ct.restore();
    }
};

Boulder.prototype.move = function() {
    this.position.x += this.velocity.x * this.acceleration * Math.cos(this.direction);
    this.position.y += this.velocity.y * this.acceleration * Math.sin(this.direction);
};

Boulder.prototype.update = function() {
    if (!this.hit) {
        this.player.checkHit(this.position, this.radius);
    }
};

Boulder.prototype.stayInArea = function(width, height) {
    if (this.position.x > width) {
        this.position.x = 0;
    }
    if (this.position.y > height) {
        this.position.y = 0;
    }
    if (this.position.x < 0) {
        this.position.x = width;
    }
    if (this.position.y < 0) {
        this.position.y = height;
    }
};

Boulder.prototype.boulderHit = function(shotPos) {
    if (shotPos.x < this.position.x+this.radius && shotPos.x > this.position.x-this.radius && shotPos.y < this.position.y+this.radius && shotPos.y > this.position.y-this.radius) {
        if (!this.hit) {
            this.player.coolDown = 0;
            this.hit = true;
            score += this.radius;
        }
    }
};

function Boulders(amount, player, maxposX, maxposY) {
    this.boulders  = [];

    for (var i = 0; i < amount; i++) {
        this.boulders[i] = new Boulder(player, maxposX, maxposY);
    }

    setInterval(function() {
        this.boulders[this.boulders.length] = new Boulder(player, maxposX, maxposY);
    }, 1000);
}

Boulders.prototype.draw = function(ct) {
    for (var i = 0; i < this.boulders.length; i++) {
        this.boulders[i].draw(ct);
    }
};

Boulders.prototype.checkHit = function(shotPos) {
    for (var i = 0; i < this.boulders.length; i++) {
        this.boulders[i].boulderHit(shotPos);
    }
};

Boulders.prototype.update = function(width, height, player) {
    for (var i = 0; i < this.boulders.length; i++) {
        if (this.boulders[i].hit) {
            this.boulders[i] = new Boulder(player, width, height);
        } else {
            this.boulders[i].move();
            this.boulders[i].stayInArea(width, height);
            this.boulders[i].update();
        }
    }
};