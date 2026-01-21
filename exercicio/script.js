let campo1 = document.getElementById("campo1");
let campo2 = document.getElementById("campo2");
let saida1 = document.getElementById("saida1");
let saida2 = document.getElementById("saida2");
let btn = document.getElementById("btn");

btn.addEventListener("click", function() {

    saida1.textContent = "Você digitou: " + campo1.value;
    saida2.textContent = "Você digitou: " + campo2.value;
});