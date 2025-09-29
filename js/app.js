// Ejercicio 1
function longitudCadenasArray(nombres) {
    return nombres.map(nombre => nombre.length);
}

const nombres = ['Juan', 'Camilo', 'Andrea', 'Sebastian', 'Fernanda'];
const longitud = longitudCadenasArray(nombres);

document.getElementById("longitudCadenasArray").innerText = longitud;

// Ejercicio 5
const timestamp = 1000;
const conversion = new Date(timestamp * 1000);
const formato_fecha = new Intl.DateTimeFormat('es-ES', {
    timeZone: 'Europe/Moscow',
    year: 'numeric',
    month: '2-digit',
    day: '2-digit',
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit',
    hour12: true
});
const formato = formato_fecha.format(conversion);
document.getElementById('fecha').textContent = `Timestamp ${timestamp} → ${formato} (Moscú)`;

// Ejercicio 8
(function(){
    var x = ['\u00A1','H','o','l','a',' ','m','u','n','d','o','!'];
    var msg = x.join('');
    var y = console['l'+'o'+'g'];
    y(msg);
})();