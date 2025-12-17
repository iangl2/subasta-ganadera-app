import '../css/styles.css';
import '../css/footer.css';
import '../css/header.css';
import '../css/market.css';
import '../css/modal.css';
import '../css/auction_styles.css';
import  '../css/login.css';
import '../css/bid-success.css';

document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.auction-carousel-track');
    const cards = document.querySelectorAll('.auction-card');

    if (!track || cards.length === 0) return;

    let index = 0;
    const cardWidth = cards[0].offsetWidth + 16; // ancho + gap
    const visibleCards = Math.floor(track.parentElement.offsetWidth / cardWidth);

    setInterval(() => {
        index++;

        if (index > cards.length - visibleCards) {
            index = 0;
        }

        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }, 2000); // cambia cada 4 segundos
});
