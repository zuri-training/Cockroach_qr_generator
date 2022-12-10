"use strict";

//variables
const download=document.querySelector('.download');
const popup=document.querySelector('.popup');
const display=document.querySelector('.display');
const close=document.querySelector('.fa-x');
let poppedup=false;


//Defining functions
function share(){
if(!poppedup){
display.style.opacity='1';
poppedup=true;
}
};


function chooseFormat(){
  if(!poppedup){
    document.querySelector('.format').style.visibility='visible';
    poppedup=true;
  }
  else{
    document.querySelector('.format').style.visibility='hidden';
 poppedup=false;
  }
}


//Event listeners
close.addEventListener('click',function(){
if(poppedup){
    display.style.opacity='0';
  poppedup=false;
}
});


