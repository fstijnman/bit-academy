const rock = document.getElementById("rock");
const paper = document.getElementById("paper");
const scissors = document.getElementById("scissors");

rock.addEventListener('click', clickRock);
paper.addEventListener('click', clickPaper);
scissors.addEventListener('click', clickScissors);

var player1 = "None";
var player2 = "None";

function clickRock() {
    if (player1 == "None") {
        player1 = "Rock";
        const faseHeader = document.getElementById("fase");
        faseHeader.innerText = 'Speler 2, kies je optie!';
    } else {
        player2 = 'Rock';
        checkResult();
    }
}

function clickPaper() {
    if (player1 == "None") {
        player1 = "Paper";
        const faseHeader = document.getElementById("fase");
        faseHeader.innerText = 'Speler 2, kies je optie!';
    } else {
        player2 = "Paper";
        checkResult();
    }
}

function clickScissors() {
    if (player1 == "None") {
        player1 = "Scissors";
        const faseHeader = document.getElementById("fase");
        faseHeader.innerText = 'Speler 2, kies je optie!';
    } else {
        player2 = "Scissors";
        checkResult();
    }
}

function checkResult() {
    const gameElement = document.getElementById('rock-paper-scissors');
    gameElement.style.display = "None";
    const faseHeader = document.getElementById("fase");
    if (player1 == player2) {
        faseHeader.innerText = 'Het is een gelijkspel!';
    } else if (player1 == 'Rock' && player2 == 'Scissors') {
        faseHeader.innerText = 'Speler 1 heeft gewonnen!';
    } else if (player1 == 'Paper' && player2 == 'Rock') {
        faseHeader.innerText = 'Speler 1 heeft gewonnen!';
    } else if (player1 == 'Scissors' && player2 == 'Paper') {
        faseHeader.innerText = 'Speler 1 heeft gewonnen!';
    } else if (player2 == 'Rock' && player1 == 'Scissors') {
        faseHeader.innerText = 'Speler 2 heeft gewonnen!';
    } else if (player2 == 'Paper' && player1 == 'Rock') {
        faseHeader.innerText = 'Speler 2 heeft gewonnen!';
    } else if (player2 == 'Scissors' && player1 == 'Paper') {
        faseHeader.innerText = 'Speler 2 heeft gewonnen!';
    }
}