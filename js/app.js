function longitudCadenasArray(nombres) {
    return nombres.map(nombre => nombre.length);
}

const nombres = ['Juan', 'Camilo', 'Andrea', 'Sebastian', 'Fernanda'];
const longitud = longitudCadenasArray(nombres);

document.getElementById("longitudCadenasArray").innerText = longitud;