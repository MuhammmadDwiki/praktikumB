var element = document.body;
function ubahWarna() { 
    element.classList.toggle("gelap");
    if(element.classList.contains('gelap')) {
        localStorage.setItem('tema', 'gelap');
    }else{
        localStorage.setItem('tema, terang');  
    }
}

var beliViaWhatsapp = document.getElementById("beli-via-whatsapp")
if (beliViaWhatsapp)
beliViaWhatsapp.addEventListener("click", function() {
    if (beliViaWhatsapp.innerHTML == "Beli Via Whatsapp") {
        beliViaWhatsapp.innerHTML = "Pembelian Via Whatsapp: 082291550686"  

    } else {
        beliViaWhatsapp.innerHTML = "Beli Via Whatsapp"  
        }
    }
)

var tema = localStorage.getItem("tema");
if(tema == 'gelap'){
    element.classList.add("gelap");
}


const btn_beli = document.querySelector('#btn-beli');
if (btn_beli)
btn_beli.addEventListener('click', function(){
    alert("Coming Soon!");
})


const btn_isMe = document.querySelector(".btn1");
const sosmed = document.querySelector(".sosmed-parent")


if(btn_isMe)

btn_isMe.addEventListener('click', function(){

    if (sosmed.style.display = "none"){
        sosmed.style.display = "block"
       
    }else{
        sosmed.style.display = "none"

    }
   
})