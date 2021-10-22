function team(){
    let pilihteam = document.getElementById("pilihteam");    
    let val = pilihteam.options[pilihteam.selectedIndex].value;
    let desc = document.getElementById("desc");

    if (val == "MUN"){
        desc.innerText =  "Lu keren";}
    else if (val == "PSG"){
        desc.innerText =  "Fans Messi";}
    else{
        desc.innerText =  "Aneh";
    }
};

function theme(){
    let pilihtema = document.getElementById('pilihtema');
    let val = pilihtema.options[pilihtema.selectedIndex].value;
    let element = document.body;

    if(val == 'light'){
        element.classList.remove("dark");}
    else{
        element.classList.toggle("dark");       
    }
};

function count(){
    let numbers = document.getElementById('numbers').value;    
    let hasilfaktor = document.getElementById('hasil');    
    let jumlah = numbers;
    for(i=jumlah-1;i>1;i--){
       jumlah*=i;
    };
    
    hasil.innerText = "Hasil dari faktorial " + numbers + " adalah " + jumlah;
};