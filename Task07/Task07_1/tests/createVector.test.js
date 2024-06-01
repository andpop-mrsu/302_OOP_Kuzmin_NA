import createVector from "../src/createVector";

test("toString", () => {
    const v = createVector(1, 2, -3);
    expect(v.toString()).toBe("(1;2;-3)");
});

test("getLength", () => {
    const v1 = createVector(-1, -2, 2);
    const v2 = createVector(0, 0, 0);
    expect(v1.getLength()).toBe(3);
    expect(v2.getLength()).toBe(0);
});

test("add", () => {
    const v1 = createVector(1, 2, 3);
    const v2 = createVector(1, 2, 0);
    expect(v1.add(v2).toString()).toBe("(2;4;3)");
});

test("sub", () => {
    const v1 = createVector(1, 2, 3);
    const v2 = createVector(1, 3, 0);
    expect(v1.sub(v2).toString()).toBe("(0;-1;3)");
});

test("product", () => {
    const v = createVector(1, 9, -3);
    expect(v.product(3).toString()).toBe("(3;27;-9)");
});

test("scalarProduct", () => {
    const v1 = createVector(1, -5, 2);
    const v2 = createVector(10, 3, 0);
    expect(v1.scalarProduct(v2)).toBe(-5);
});

test("vectorProduct", () => {
    const v1 = createVector(9, 1, -5);
    const v2 = createVector(0, -1, 2);
    expect(v1.vectorProduct(v2).toString()).toBe("(-3;-18;-9)");
});
