"use strict";
let toggler = document.getElementById("menu");
let closeMenu = document.getElementById("close");
let nav = document.getElementById("ul");

toggler.onclick=function showMenu(){
    if (nav.style.display =="none"){
        nav.style.display ="block";
    }else{
        nav.style.display = "none";
    }
}
closeMenu.onclick = function closeMenu(){
    nav.style.display="none";
}