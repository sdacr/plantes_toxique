'use strict'
let hover;
function cadre(){
    let taller=document.querySelector("#image-show");
    taller.classList.toggle('transi')
    let size=document.querySelector(".two");
    size.classList.toggle('move')
}

hover=document.querySelector("#image-show");
hover.addEventListener('mouseover',cadre);
hover.addEventListener("mouseleave",cadre);


