export default function Vector(x, y, z) {
    this.x = x;
    this.y = y;
    this.z = z;
}

Vector.prototype.getLength = function() {
    return Math.sqrt(this.x ** 2 + this.y ** 2 + this.z ** 2);
}

Vector.prototype.add = function(vector) {
    return new Vector(
        this.x + vector.x,
        this.y + vector.y,
        this.z + vector.z
    );
}

Vector.prototype.sub = function(vector) {
    return new Vector(
        this.x - vector.x,
        this.y - vector.y,
        this.z - vector.z
    );
}

Vector.prototype.product = function(number) {
    return new Vector(this.x * number, this.y * number, this.z * number);
}

Vector.prototype.scalarProduct = function(vector) {
    return this.x * vector.x + this.y * vector.y + this.z * vector.z;
}

Vector.prototype.vectorProduct = function(vector) {
    return new Vector(
        this.y * vector.z - this.z * vector.y,
        this.z * vector.x - this.x * vector.z,
        this.x * vector.y - this.y * vector.x
    );
}

Vector.prototype.toString = function() {
    return `(${this.x};${this.y};${this.z})`;
}
