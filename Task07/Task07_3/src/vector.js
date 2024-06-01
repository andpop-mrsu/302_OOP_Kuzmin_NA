export default class Vector {
    constructor(x, y, z) {
        this.x = x;
        this.y = y;
        this.z = z;
    }

    get length() {
        return Math.sqrt(this.x ** 2 + this.y ** 2 + this.z ** 2);
    }

    add(vector) {
        return new Vector(
            this.x + vector.x,
            this.y + vector.y,
            this.z + vector.z
        );
    }

    sub(vector) {
        return new Vector(
            this.x - vector.x,
            this.y - vector.y,
            this.z - vector.z
        );
    }

    product(number) {
        return new Vector(this.x * number, this.y * number, this.z * number);
    }

    scalarProduct(vector) {
        return this.x * vector.x + this.y * vector.y + this.z * vector.z;
    }

    vectorProduct = function(vector) {
        return new Vector(
            this.y * vector.z - this.z * vector.y,
            this.z * vector.x - this.x * vector.z,
            this.x * vector.y - this.y * vector.x
        );
    }

    toString() {
        return `(${this.x};${this.y};${this.z})`;
    }
}
