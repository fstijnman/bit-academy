const pi = 3.14;
const calculateBtn = document.getElementById("bereken-button");
calculateBtn.addEventListener("click", berekenDiameter);

function berekenDiameter() {
    let diameter = document.querySelector("#diameter").value;
    const omtrekEl = document.querySelector("#omtrek");
    let omtrek = diameter * pi;
    omtrekEl.innerText = 'Omtrek: ' + omtrek.toFixed(2);
    const oppervlakteEl = document.querySelector("#oppervlakte");
    let oppervlakte = 0.25 * pi * (diameter ** 2);
    oppervlakteEl.innerText = 'Oppervlakte: ' + oppervlakte.toFixed(2);
}

function showTime() {
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    const timeEl = document.querySelector("#time");
    timeEl.innerText = "Het is " + time;
}

setInterval(showTime, 1000);

