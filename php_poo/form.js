window.addEventListener("load",desButton)

function desButton(){
  document.getElementById("B2").disabled=true;
}

document.getElementById('B1').addEventListener('click',Form);
document.getElementById('B1.1').addEventListener('click',Form);
document.getElementById('V1').addEventListener('click',Form);

let V1_1 = 1;
let V2_1 = 0;

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
document.getElementById('V2').addEventListener('click',Form2);

function Form2(){
let Carre2 = document.getElementById("carre2");
    if(getComputedStyle(Carre2).display != "none"){
      Carre2.style.display = "none";
    } else {
      Carre2.style.display = "block";
    }
  }

document.getElementById('V2').addEventListener('click',VerifP);

function VerifP(){
  V2_1 = document.getElementById("V2").value;
}

document.getElementById('V1').addEventListener('click',VerifP2);

function VerifP2(){
  V1_1 = document.getElementById("V1").value;
}

document.getElementById('B4').addEventListener('click',VerifP3);

function VerifP3(){
  if (V1_1 == V2_1){
    document.getElementById("B2").disabled=false;
  }else{
    document.getElementById("B2").disabled=true;
  }
}






















