
let titulo = document.getElementById("titulo");
let botao = document.getElementById("btn");
var valor = 0;

botao.addEventListener("click", function(){


    titulo.classList.toggle("titulo");

    if(valor == 0){

        titulo.textContent = "";
        titulo.textContent = "titulo nao estilizado";
        valor = 1;

    }

    else if(valor == 1){

        titulo.textContent = "";
        titulo.textContent = "titulo estilizado";
        valor = 0;

    }

})



    