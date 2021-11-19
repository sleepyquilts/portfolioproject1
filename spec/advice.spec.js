describe("Ajax Tests data", function () {
    var slip = {
        "slip": {
            "slip_id": "2",
            "advice": "Smile and the world smiles with you. Frown and you're on your own."
        }
    };
    it("should return an object with a slip_id", function () {
        expect(slip).toEqual(jasmine.any(Object));
        expect(slip.slip["slip_id"]).toEqual("2");
        expect(slip.slip["slip_id"]).toEqual(jasmine.any(String));
        expect(slip.slip["slip_id"]).not.toEqual(jasmine.any(Function));
        expect(slip.slip["slip_id"]).not.toEqual(jasmine.any(Boolean));
        expect(slip.slip["slip_id"]).not.toEqual(jasmine.any(Number));
    });

    it("should return an object with advice", function () {
        expect(slip).toEqual(jasmine.any(Object));
        expect(slip.slip["advice"]).toEqual("Smile and the world smiles with you. Frown and you're on your own.");
        expect(slip.slip["advice"]).toEqual(jasmine.any(String));
        expect(slip.slip["advice"]).not.toEqual(jasmine.any(Function));
        expect(slip.slip["advice"]).not.toEqual(jasmine.any(Boolean));
        expect(slip.slip["advice"]).not.toEqual(jasmine.any(Number));
    });
});