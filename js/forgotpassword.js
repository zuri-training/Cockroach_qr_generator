 document.querySelector("#s-popup").addEventListener("click", function () {
     document.querySelector(".popup").classList.add("active")
     document.querySelector('.r-container').classList.add('hide_me');
 });


 document.querySelector(".popup .close-btn").addEventListener("click", function () {
     document.querySelector(".popup").classList.remove("active");
     document.querySelector('.r-container').classList.remove('hide_me');
 });