const bckgrndBtn = document.getElementById("bckgrnd-btn");
bckgrndBtn.addEventListener("click", changeBackgroundColor);

const titleBtn = document.getElementById("title-btn");
titleBtn.addEventListener("click", changeBackgroundColorTitle);

const bckgrndtitleBtn = document.getElementById("bckgrnd-title-btn");
bckgrndtitleBtn.addEventListener("click", changeBackgroundColor);
bckgrndtitleBtn.addEventListener("click", changeBackgroundColorTitle);

function changeBackgroundColor() {
    var color = document.querySelector("#colorpicker").value;
    document.body.style.backgroundColor = color;
}

function changeBackgroundColorTitle() {
    var color = document.querySelector("#colorpicker").value;
    var h1Elements = document.getElementsByTagName("h1");
    for (var i = 0; i < h1Elements.length; i++) {
        h1Elements[i].style.color = color;
    }
}

