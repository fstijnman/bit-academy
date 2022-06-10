const vragen = [
    "Wat is de hoofdstad van Frankrijk?",
    "Hoeveel poten heeft een spin?",
    "Wat is het grootste meer van Nederland?",
    "Wat is een Duits automerk?",
    "Noem een Waddeneiland",
];

const antwoorden = [
    "Parijs",
    8,
    "IJsselmeer",
    ["Volkswagen", "Audi", "Opel", "Porsche", "BMW", "Mercedes", "Mercedes-Benz"],
    ["Texel", "Vlieland", "Terschelling", "Ameland", "Schiermonnikoog"],
];

const automerken = antwoorden[3];
const waddeneilanden = antwoorden[4];

var question1 = document.getElementById('vraag1');
var question2 = document.getElementById('vraag2');
var question3 = document.getElementById('vraag3');
var question4 = document.getElementById('vraag4');
var question5 = document.getElementById('vraag5');

question1.innerHTML = vragen[0];
question2.innerHTML = vragen[1];
question3.innerHTML = vragen[2];
question4.innerHTML = vragen[3];
question5.innerHTML = vragen[4];

var counter = 0;

function checkAnswers() {
    var answer1 = document.getElementById('hoofdstad');
    var answer2 = document.getElementById('poten');
    var answer3 = document.getElementById('meer');
    var answer4 = document.getElementById('merk');
    var answer5 = document.getElementById('wad');
    console.log(answer1.value);

    var checkauto = automerken.includes(answer4.value);
    var checkwad = waddeneilanden.includes(answer5.value);


    if (answer1.value == antwoorden[0]) {
        answer1.style.backgroundColor = 'lightgreen';
        counter++;
    } else {
        answer1.style.backgroundColor = 'red';
    }

    if (answer2.value == antwoorden[1]) {
        answer2.style.backgroundColor = 'lightgreen';
        counter++;
    } else {
        answer2.style.backgroundColor = 'red';
    }

    if (answer3.value == antwoorden[2]) {
        answer3.style.backgroundColor = 'lightgreen';
        counter++;
    } else {
        answer3.style.backgroundColor = 'red';
    }

    if (checkauto === true) {
        answer4.style.backgroundColor = 'lightgreen';
        counter++;
    } else {
        answer4.style.backgroundColor = 'red';
    }

    if (checkwad === true) {
        answer5.style.backgroundColor = 'lightgreen';
        counter++;
    } else {
        answer5.style.backgroundColor = 'red';
    }

    var score = document.getElementById('score');
    score.innerHTML = "Je hebt " + counter + " punten gescoord";

    counter = 0;
}

var submitbutton = document.getElementById('submit');
submitbutton.addEventListener('click', checkAnswers);
