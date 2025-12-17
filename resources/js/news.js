
const noticiasData = [
    {
        id: 1,
        titulo: "Nueva tecnología de trazabilidad ganadera llega a Panamá",
        imagen: "../img/tecnologia-ganadera.jpg",
        contenido: "El sector ganadero panameño da un paso importante hacia la modernización con la implementación de sistemas de trazabilidad digital. Esta tecnología permitirá a los productores monitorear cada animal desde su nacimiento hasta la comercialización, mejorando la transparencia y calidad del ganado.",
        fecha: "15 de Diciembre, 2025"
    },
    {
        id: 2,
        titulo: "Récord de asistencia en última subasta ganadera de Chiriquí",
        imagen: "../img/subasta-record.jpg",
        contenido: "La subasta ganadera celebrada el pasado fin de semana en Chiriquí rompió todos los récords de asistencia y ventas. Más de 500 ganaderos participaron en el evento, donde se comercializaron más de 1,200 cabezas de ganado bovino de alta calidad, generando un movimiento económico superior a los 2 millones de dólares.",
        fecha: "12 de Diciembre, 2025"
    },
    {
        id: 3,
        titulo: "Programa de mejoramiento genético beneficia a pequeños productores",
        imagen: "../img/mejoramiento-genetico.jpg",
        contenido: "El Ministerio de Desarrollo Agropecuario lanza un ambicioso programa de mejoramiento genético bovino dirigido a pequeños y medianos productores. La iniciativa incluye acceso a semen de toros de razas puras como Brahman y Angus, capacitación técnica y asistencia veterinaria especializada.",
        fecha: "10 de Diciembre, 2025"
    },
    
];


const noticiasRecomendadasData = [
    {
        id: 7,
        titulo: "Consejos para preparar su ganado antes de una subasta",
        imagen: "../img/preparacion-ganado.jpg",
        fecha: "1 de Diciembre, 2025"
    },
    {
        id: 8,
        titulo: "La importancia de la vacunación en el ganado bovino",
        imagen: "../img/vacunacion-ganado.jpg",
        fecha: "28 de Noviembre, 2025"
    },
    {
        id: 9,
        titulo: "Tendencias del mercado ganadero para el 2026",
        imagen: "../img/tendencias-2026.jpg",
        fecha: "25 de Noviembre, 2025"
    },
    
];


function crearTarjetaNoticia(noticia) {
    return `
        <article class="noticia-card" onclick="verNoticia(${noticia.id})">
            <div class="noticia-image-wrapper">
                <img src="${noticia.imagen}" alt="${noticia.titulo}" class="noticia-image" 
                    onerror="this.src='../img/placeholder-noticia.jpg'">
            </div>
            <div class="noticia-content">
                <p class="noticia-fecha">
                    <i class='bx bx-calendar'></i>
                    ${noticia.fecha}
                </p>
                <h3 class="noticia-titulo">${noticia.titulo}</h3>
                <p class="noticia-descripcion">${noticia.contenido}</p>
                <a href="#" class="noticia-leer-mas" onclick="event.preventDefault(); verNoticia(${noticia.id})">
                    Leer más <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </article>
    `;
}


function crearTarjetaRecomendada(noticia) {
    return `
        <article class="noticia-recomendada-card" onclick="verNoticia(${noticia.id})">
            <div class="noticia-recomendada-image-wrapper">
                <img src="${noticia.imagen}" alt="${noticia.titulo}" class="noticia-recomendada-image"
                    onerror="this.src='../img/placeholder-noticia.jpg'">
            </div>
            <div class="noticia-recomendada-content">
                <p class="noticia-recomendada-fecha">${noticia.fecha}</p>
                <h3 class="noticia-recomendada-titulo">${noticia.titulo}</h3>
            </div>
        </article>
    `;
}


function cargarNoticias() {
    const container = document.getElementById('noticias-container');
    if (!container) return;
    
    container.innerHTML = noticiasData.map(noticia => crearTarjetaNoticia(noticia)).join('');
}


function cargarNoticiasRecomendadas() {
    const container = document.getElementById('noticias-recomendadas-container');
    if (!container) return;
    
    container.innerHTML = noticiasRecomendadasData.map(noticia => crearTarjetaRecomendada(noticia)).join('');
}


function verNoticia(id) {
    console.log(`Ver noticia con ID: ${id}`);
    
    alert(`Funcionalidad de detalle de noticia ${id} - Aquí puedes implementar la vista completa de la noticia`);
}


document.addEventListener('DOMContentLoaded', function() {
    cargarNoticias();
    cargarNoticiasRecomendadas();
});


window.noticiasData = noticiasData;
window.noticiasRecomendadasData = noticiasRecomendadasData;