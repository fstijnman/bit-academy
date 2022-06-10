const requestUrl = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

function requestJSON(url) {
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.send();
    request.onload = function () {
        let response = request.response;
        processResponse(response);
    }
}

function sendRequest() {
    requestJSON(requestUrl);
}

function processResponse(response) {
    var aResponse = JSON.parse(response);

    document.getElementById("squadName").innerHTML = aResponse.squadName;
    document.getElementById("homeTown").innerHTML = aResponse.homeTown;
    document.getElementById("formed").innerHTML = aResponse.formed;
    document.getElementById("secretBase").innerHTML = aResponse.secretBase;
    document.getElementById("active").innerHTML = aResponse.active;

    let memberTable = document.getElementById("member-table");

    for (const [key,value] of Object.entries(aResponse.members)) {
        let newRow = memberTable.insertRow(-1);
        newRow.className = "border";
        newRow.innerHTML = "<th>" + value.name +
            "</th><th>" + value.age +
            "</th><th>"+ value.secretIdentity +
            "</th><th>"+ value.powers + "</th>";
    }

}

sendRequest();

