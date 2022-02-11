var pulsante;
var testoInserito;
var scriviLista;
var contenutoLista = [];

window.addEventListener("load", init);
function init() {
    pulsante = document.querySelector("#pulsante");
    testoInserito = document.querySelector("#testo_inserito");
    scriviLista = document.querySelector("#scrivi_lista");
    pulsante.addEventListener("click", addTask);
}

function addTask() {
    contenutoLista.push(testoInserito.value);
    buildList();
    clearForms();
}

function buildList() {
    var lista = "";
    for (var i = 0; i < contenutoLista.length; i++) {
        lista += "<li class='list-group-item '>" + contenutoLista[i] + "<button onclick='chiudiLista('+i+')' class='btn-close float-end bg-danger text-light'></button>" + "</li>";
    }
    scriviLista.innerHTML = lista;
    localStorage.setItem("contenutoLista", contenutoLista);
    clearForms();
}

function clearForms() {
    testoInserito.value = '';
}

function chiudiLista(i) {
    contenutoLista.splice(i, 1);
    buildList();
    localStorage.setItem("contenutoLista", contenutoLista);
}



