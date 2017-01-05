/**
 * A Projectile as an object.
 */
function Projectile(height, position, direction) {
    this.height    = height    || 10;
    this.position  = position  || new Vector();
    this.img       = new window.Image();
    this.img.src   = "img/game/shot.png";
    this.direction = direction;
}

Projectile.prototype.draw = function(ct) {
    ct.save();
    ct.translate(this.position.x, this.position.y);
    ct.beginPath();
    ct.drawImage(this.img, -16, -16, 16, 16);
    ct.stroke();
    ct.restore();
};

Projectile.prototype.update = function(maxposX, maxposY) {
    this.position.x += 6 * Math.cos(this.direction);
    this.position.y += 6 * Math.sin(this.direction);
    boulders.checkHit(this.position);
    return this.inArea(maxposX, maxposY);
};

Projectile.prototype.inArea = function(maxposX, maxposY) {
    if (this.position.x < 0 || this.position.x > maxposX || this.position.y < 0 || this.position.y > maxposY) {
        return false;
    }
    return true;
};

/**
 * Projectiles as an object.
 */
function Projectiles() {
    this.projectiles = [];
}

Projectiles.prototype.fire = function(height, position, direction, maxposX, maxposY) {
    this.projectiles.push(new Projectile(height, position, direction, maxposX, maxposY));
};

Projectiles.prototype.draw = function(ct) {
    for (var i = 0; i < this.projectiles.length; i++) {
        this.projectiles[i].draw(ct);
    }
};

Projectiles.prototype.update = function(maxposX, maxposY) {
    var i = 0;
    while (i < this.projectiles.length) {
        if (!this.projectiles[i].update(maxposX, maxposY)) {
            this.projectiles.splice(i, 1);
        }
        i++;
    }
};