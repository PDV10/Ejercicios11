"use strict";

let listar5 = document.querySelector("#listar5").addEventListener("click", renderizado);
let listar20 = document.querySelector("#listar20").addEventListener("click", renderizado);
let listar100 = document.querySelector("#listar100").addEventListener("click", renderizado);
let contenedor = document.querySelector("#contenedor");

async function renderizado(e){
    e.preventDefault();
    let href = e.target.getAttribute("href");
    let url = href;

    try {
        let promesa = await fetch(url)
        if (promesa.ok) {
            let respuesta = await promesa.text();
            contenedor.innerHTML = respuesta;
        }else{
            contenedor.innerHTML= "error else";
        }
    } catch (error) {
        contenedor.innerHTML = "error catch";
    }
}

