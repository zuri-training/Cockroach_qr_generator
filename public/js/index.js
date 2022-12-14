"use strict";
let toggler = document.getElementById("menu");
let closeMenu = document.getElementById("close");
let nav = document.querySelector('.normal-nav');

toggler.onclick=function showMenu(){
    nav.removeAttribute('id');
    nav.classList.add('nav-menu');
closeMenu.onclick = function closeMenu(){
    nav.setAttribute('id','ul');
    nav.classList.remove('nav-menu');

}
}