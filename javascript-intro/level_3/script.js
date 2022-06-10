var h1 = document.querySelector("h1");
h1.classList.add("fun_day");
var ps = document.querySelectorAll("p");
ps.forEach(add_classlist);

function add_classlist(p) {
    p.classList.add("vacation");
}