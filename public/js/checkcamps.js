
function validazione(event){
    const inputs=document.querySelectorAll('input');
    let campi_ok=true;
    for(input of inputs){
        if(input.value.length==0){
            input.classList.add('vuoto');
            campi_ok=false;
        }
    }
    if(!campi_ok){
        event.preventDefault();
    }

}



const form = document.querySelector('form');
form.addEventListener('submit', validazione);

function controllacampo(event){
    if(event.currentTarget.value.length==0){
        event.currentTarget.classList.add('vuoto');
    }
    else{
        event.currentTarget.classList.remove('vuoto');
    }
}

const inputs=document.querySelectorAll('input[type="text"], input[type="password"], input[type="textarea"]'
);
for(input of inputs){
    input.addEventListener('blur', controllacampo);
}