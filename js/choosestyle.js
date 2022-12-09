"use strict";
const share=document.querySelector('.share');
const popup=document.querySelector('.popup');
const display=document.querySelector('.display');
const close=document.querySelector('.fa-x')
let poppedup=false;

share.addEventListener('click',function(){
if(!poppedup){
display.style.display='block';
poppedup=true;
}
});
close.addEventListener('click',function(){
if(poppedup){
    display.style.display='none';
  poppedup=false;
}
});