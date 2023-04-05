window.addEventListener("load",desButton)

document.getElementById('B1').addEventListener('click',Form);
document.getElementById('B1.1').addEventListener('click',Form);

function Form(){
let Carre = document.getElementById("carre");
    if(getComputedStyle(Carre).display != "none"){
      Carre.style.display = "none";
    } else {
      Carre.style.display = "block";
    }
  }

document.getElementById('B3').addEventListener('click',Form2);
document.getElementById('B3.1').addEventListener('click',Form2);

function Form2(){
let Carre2 = document.getElementById("carre2");
    if(getComputedStyle(Carre2).display != "none"){
      Carre2.style.display = "none";
    } else {
      Carre2.style.display = "block";
    }
  }

document.getElementById('V2').addEventListener('click',Form3);
document.getElementById('V1').addEventListener('click',Form4);

























function desButton(){
    document.getElementById("B2").disabled=true;
}