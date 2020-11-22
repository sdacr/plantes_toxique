'use strict'

//container
const carousselContainer = document.querySelector('.carousel-slide');
const indexPlt = document.querySelectorAll('.carousel-slide div');

//button
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//counter
let counter  = 0;
const size = indexPlt[0].clientWidth;
let div = indexPlt.length;
carousselContainer.style.transform= 'translateX(' + (-size * counter ) + 'px)';

//button listener
nextBtn.addEventListener('click',()=>{
   // if(counter >= carousselContainer.length-1) return;
    carousselContainer.style.transition = "transform 0.4s ease-in-out";
    
    counter++;
    
    if(counter>=div-4){
        counter = 0;
    }
    console.log(counter);
    carousselContainer.style.transform= 'translateX(' + (-size * counter ) + 'px)';
});


prevBtn.addEventListener('click',()=>{
    //if(counter <=0) return;
    carousselContainer.style.transition = "transform 0.4s ease-in-out";
    counter--;
    if(counter<0){
        counter = indexPlt.length-counter-5;
    }
    console.log(counter);
    carousselContainer.style.transform= 'translateX(' + (-size * counter ) + 'px)';
});
console.log(div);
console.log(counter);



