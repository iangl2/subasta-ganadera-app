let countdownTimer = null;

/* --------------------------------------------
   FUNCIONES ORIGINALES DEL COUNTDOWN
--------------------------------------------- */

function getTimeSegmentElements(segmentElement){
    const segmentDisplay = segmentElement.querySelector('.segment-display');
    const segmentDisplayTop = segmentDisplay.querySelector('.segment-display-top');
    const segmentDisplayBottom = segmentDisplay.querySelector('.segment-display-bottom');
    const segmentOverlay = segmentDisplay.querySelector('.segment-overlay');
    const segmentOverlayTop = segmentOverlay.querySelector('.segment-overlay-top');
    const segmentOverlayBottom = segmentOverlay.querySelector('.segment-overlay-bottom');

    return {
        segmentDisplayTop,
        segmentDisplayBottom,
        segmentOverlay,
        segmentOverlayTop,
        segmentOverlayBottom
    };
}

function updateSegmentValues(displayElement, overlayElement, value){
    displayElement.textContent = value;
    overlayElement.textContent = value;
}

function updateTimeSegment(segmentElement, timeValue){
    const segmentElements = getTimeSegmentElements(segmentElement);

    if(parseInt(segmentElements.segmentDisplayTop.textContent, 10) === timeValue){
        return;
    }

    segmentElements.segmentOverlay.classList.add('flip');

    updateSegmentValues(
        segmentElements.segmentDisplayTop, 
        segmentElements.segmentOverlayBottom, 
        timeValue
    );

    function finishAnimation(){
        segmentElements.segmentOverlay.classList.remove('flip');
        updateSegmentValues(
            segmentElements.segmentDisplayBottom, 
            segmentElements.segmentOverlayTop, 
            timeValue
        );
        this.removeEventListener('animationend', finishAnimation);
    }

    segmentElements.segmentOverlay.addEventListener('animationend', finishAnimation);
}

function updateTimeSection(sectionID, timeValue){
    const firstNumber = Math.floor(timeValue / 10);
    const secondNumber = timeValue % 10;

    const sectionElement = document.getElementById(sectionID);
    const timeSegments = sectionElement.querySelectorAll('.time-segment');

    updateTimeSegment(timeSegments[0], firstNumber);
    updateTimeSegment(timeSegments[1], secondNumber);
}

function getTimeRemaining(targetDateTime){
    const nowTime = Date.now();
    const secondsRemaining = Math.floor((targetDateTime - nowTime) / 1000);

    const complete = nowTime >= targetDateTime;

    if(complete){
        return {
            complete,
            seconds: 0,
            minutes: 0,
            hours: 0,
            days: 0
        };
    }

    const days = Math.floor(secondsRemaining / 86400);
    const hours = Math.floor((secondsRemaining % 86400) / 3600);
    const minutes = Math.floor((secondsRemaining % 3600) / 60);
    const seconds = secondsRemaining % 60;

    return {
        complete,
        seconds,
        minutes,
        hours,
        days
    };
}

function updateAllSegments(targetDateTime){
    const timeRemainingBits = getTimeRemaining(targetDateTime);

    updateTimeSection('days', Math.min(timeRemainingBits.days, 99));
    updateTimeSection('hours', timeRemainingBits.hours);
    updateTimeSection('minutes', timeRemainingBits.minutes);
    updateTimeSection('seconds', timeRemainingBits.seconds);

    return timeRemainingBits.complete;
}

/* --------------------------------------------
   INTEGRACIÓN CON LARAVEL Y BLADE
   Lee la fecha desde: <div class="countdown" data-end="2025-12-31 23:59:59">
--------------------------------------------- */

document.addEventListener("DOMContentLoaded", () => {

    const countdownEl = document.querySelector(".countdown");

    if (!countdownEl) return;

    const endDate = countdownEl.dataset.end;

    if (!endDate) {
        console.error("No se encontró atributo data-end en .countdown");
        return;
    }

    const targetTs = new Date(endDate).getTime();

    if (Number.isNaN(targetTs)) {
        console.error("Formato de fecha inválido:", endDate);
        return;
    }

    // Inicia el conteo inmediatamente
    if (countdownTimer) clearInterval(countdownTimer);

    updateAllSegments(targetTs);

    countdownTimer = setInterval(() => {
        const finished = updateAllSegments(targetTs);
        if (finished) clearInterval(countdownTimer);
    }, 1000);
});
