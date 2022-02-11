var pulsante;
var testoInserito;
var scriviLista;
var contenutoLista = [];

window.addEventListener("load", init);
function init() {
    pulsante = document.querySelector("#pulsante");
    testoInserito = document.querySelector("#testo_inserito");
    scriviLista = document.querySelector("#scrivi_lista");
    eventHandlers();
}

function eventHandlers() {
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
            lista += "<li class='list-group-item d-flex justify-content-between align-items-center w-75 mx-auto text-secondary'>" + contenutoLista[i] + "<button onclick='chiudiLista("+ i +")' class='btn-danger float-end rounded'>X</button>" + "</li>";
        }
    
    scriviLista.innerHTML = lista;
    localStorage.setItem("contenuto", contenutoLista);
    clearForms();
}

function clearForms() {
    testoInserito.value = '';
}

function chiudiLista(i) {
    contenutoLista.splice(i, 1);
    buildList();
    localStorage.setItem("contenuto", contenutoLista);
}



