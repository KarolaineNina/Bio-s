var btnEntrar = document.querySelector("#entrar");
var btnInscrevase = document.querySelector("#inscrevase");

var body = document.querySelector("body");

btnEntrar.addEventListener("click", function(){
    body.className = "entrar-js";
});

btnInscrevase.addEventListener("click", function(){
    body.className = "inscreva-se-js";
});