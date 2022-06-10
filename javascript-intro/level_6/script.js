const testQuestions = [
    "Wat is de hoofdstad van Frankrijk?",
    "Hoeveel poten heeft een spin?",
    "Wat is het grootste meer van Nederland?",
    "Wat is een Duits automerk?",
    "Noem een Waddeneiland",
];
const correctAnswers = [
    "Parijs",
    8,
    "IJsselmeer",
    ["Volkswagen", "Audi", "Opel", "Porsche", "BMW", "Mercedes", "Mercedes-Benz"],
    ["Texel", "Vlieland", "Terschelling", "Ameland", "Schiermonnikoog"],
];

for (var j = 0; j < testQuestions.length; j++) {
    const newQuestion = document.createElement("p");
    newQuestion.innerText = testQuestions[j];
    document.getElementById('vragen').appendChild(newQuestion);
    const newAnswer = document.createElement("input");
    if (Number.isInteger(correctAnswers[j])) {
        newAnswer.type = 'number';
    } else {
        newAnswer.type = 'text';
    }
    newAnswer.name = 'antwoord';
    newAnswer.id = 'antwoord' + (j + 1);
    document.getElementById('vragen').appendChild(newAnswer);
}

const checkBtn = document.getElementById("controleer-antwoorden");
checkBtn.addEventListener("click", checkAnswers);

function checkAnswers() {
    var input = document.getElementsByName('antwoord');
    var testUitslag = true;
    let counter = 0;
    for (var i = 0; i < input.length; i++) {
        var antwoord = input[i].value;
        const antwoordEl = document.getElementById("antwoord" + (i + 1));
        if (Array.isArray(correctAnswers[i]) == true) {
            if (correctAnswers[i].includes(antwoord)) {
                antwoordEl.style.backgroundColor = 'lightgreen';
                counter++;
            } else {
                antwoordEl.style.backgroundColor = 'red';
                testUitslag = false;
            }
        } else if (Array.isArray(correctAnswers[i]) == false) {
            if (antwoord != correctAnswers[i]) {
                testUitslag = false;
                antwoordEl.style.backgroundColor = 'red';
            } else {
                antwoordEl.style.backgroundColor = 'lightgreen';
                counter++;
            }
        }
    }
    const uitslagText = document.querySelector("#testuitslag");
    uitslagText.innerText = 'Je hebt ' + counter + " punten gescoord";
}