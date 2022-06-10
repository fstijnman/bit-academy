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
    response_json = JSON.parse(response);
    // console.log(response_json);
    for (let item in response_json) {
        if (item != 'members') {
            const tableElement = document.querySelector('#' + item);
            tableElement.innerHTML = response_json[item];
        } else if (item == 'members') {
            for (let member in response_json[item]) {
                const newRow = document.createElement("tr");
                for (let feature in response_json[item][member]) {
                    console.log(feature, response_json[item][member][feature]);
                    const newEl = document.createElement("td");
                    newEl.innerText = response_json[item][member][feature]
                    newRow.appendChild(newEl);

                }
                const table = document.querySelector('#member-table');
                table.appendChild(newRow);
            }
        }
    }
}

sendRequest();