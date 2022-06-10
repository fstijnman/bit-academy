function checkErrorType(errorType) {
    if (errorType instanceof TypeError) {
        let h3 = document.createElement("h3");
        h3.innerText = "Een error van type: TypeError";
        document.body.appendChild(h3);
    } else if (errorType instanceof ReferenceError == true) {
        let h3 = document.createElement("h3");
        h3.innerText = "Een error van type: ReferenceError";
        document.body.appendChild(h3);
    } else {
        let h3 = document.createElement("h3");
        h3.innerText = "Een error van type: Error";
        document.body.appendChild(h3);
    }
}


function gooiButton() {
    try {
        bal.gooi();
    } catch (error) {
        checkErrorType(error);
    }

}

function vangButton() {
    try {
        bal.vang();
    } catch (error) {
        checkErrorType(error);
    }
}

function resetButton() {
    try {
        bal.reset();
    } catch (error) {
        checkErrorType(error);
    }
}


var bal = {
    canvasBal: constructBal(),
    balPositie: "links",

    gooi: function () {
        if (this.balPositie !== "links") {
            let number = Math.round(Math.random() * 2);
            if (number === 0) {
                this.referenceErrorType();
            } else if (number === 1) {
                this.typeErrorType();
            } else {
                throw Error("bal in verkeerde positie")
            }
        }
        this.draw(300, 50);
        this.balPositie = "midden";
    },

    vang: function () {
        if (this.balPositie !== "midden") {
            let number = Math.round(Math.random() * 2);
            if (number === 0) {
                this.referenceErrorType();
            } else if (number === 1) {
                this.typeErrorType();
            } else {
                throw Error("bal in verkeerde positie")
            }
        }
        this.draw(500, 250);
        this.balPositie = "rechts";
    },

    reset: function () {
        this.draw(100, 250);
        this.balPositie = "links";
    },

    draw: function (x, y) {
        this.canvasBal.clearRect(0, 0, 600, 300);
        this.canvasBal.beginPath();
        this.canvasBal.arc(x, y, 50, 0, 2 * Math.PI);
        this.canvasBal.closePath();
        this.canvasBal.fill();
    },

    referenceErrorType: function () {
        throw new ReferenceError();
    },

    typeErrorType: function () {
        const a = 10;
        a = 20;
    },
}

function constructBal() {
    let bal = document.getElementById("bal").getContext("2d");
    bal.fillStyle = "red";
    bal.beginPath();
    bal.arc(100, 250, 50, 0, 2 * Math.PI);
    bal.closePath();
    bal.fill();
    return bal
}