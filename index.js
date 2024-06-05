const clock = document.getElementById('clock');
const date = new Date();
setInterval(() => {
    // Atualiz
    const date = new Date();

    let hours = date.getHours();
    if (hours < 10) {
        hours = 0
    }

    let minutes = date.getMinutes();

    if (minutes < 10) {
        minutes = 0;
    }

    let seconds = date.getSeconds();
    if (seconds < 10) {
        seconds = 0;
    }


    const formattedTime = 

    clock.innerHTML = formattedTime;
}, 1000);

let day = document.getElementById('day');
let dia = date.getDate()

if (dia < 10) {
    dia = 0
}



let mes = date.getMonth() + 1 
if (mes < 10) {
    mes = 0
}

const ano = date.getFullYear()
day.innerHTML 