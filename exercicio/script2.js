let campo1 = document.getElementById("campo1");
let campo2 = document.getElementById("campo2");
let campo3 = document.getElementById("campo3");
let campo4 = document.getElementById("campo4");
let campo5 = document.getElementById("campo5");
let saida1 = document.getElementById("saida1");
let saida2 = document.getElementById("saida2");
let saida3 = document.getElementById("saida3");
let saida4 = document.getElementById("saida4");
let saida5 = document.getElementById("saida5");

let btn = document.getElementById("btn");

btn.addEventListener("click", function() {

    saida1.textContent = "Você digitou: " + campo1.value;
    saida2.textContent = "Você digitou: " + campo2.value;
    saida3.textContent = "Você digitou: " + campo3.value;
    saida4.textContent = "Você digitou: " + campo4.value;
    saida5.textContent = "Você digitou: " + campo5.value;

});