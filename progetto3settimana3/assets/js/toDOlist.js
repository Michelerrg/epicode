/*
var aggiungi_elemento = document.getElementById("button");
        aggiungi_elemento.addEventListener("click", stampa_lista);
        function stampa_lista() {
            var lista = document.getElementById("lista");
            var contenuto = document.getElementById("testo_inserito").value;     
            lista.innerHTML += "<li class='list-group-item'>" + contenuto + "</li>";
            localStorage.setItem('contenuto', contenuto);
            console.localStorage.getItem('contenuto'. contenuto).split(",");
        }
        */

var button;
var testoInserito;
var scriviLista;
var contenutoLista = [];

window.addEventListener("load", init);
function init() {
    button = document.querySelector("#button");
    testoInserito = document.querySelector("#testo_inserito");
    scriviLista = document.querySelector("#scrivi_lista");
    button.addEventListener("click", addTask);
}

function addTask() {
    contenutoLista.push(testoInserito.value);
    buildList();
    clearForms();
}

function buildList() {
    var lista = "";
    for (var i = 0; i < contenutoLista.length; i++) {
        lista += "<li class='list-group-item '>" + contenutoLista[i] + "<span class='btn-close float-end';'></span>" + "</li>";
    }
    scriviLista.innerHTML = lista;
    localStorage.setItem("contenutoLista", contenutoLista);
    clearForms();
}

function clearForms() {
    testoInserito.value = '';
}