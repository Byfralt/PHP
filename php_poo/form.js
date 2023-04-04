document.getElementById('B1').addEventListener('click',Form);

function Form(){
let Carre = document.getElementById("carre");
    if(getComputedStyle(Carre).display != "none"){
      Carre.style.display = "none";
    } else {
      Carre.style.display = "block";
    }
  }