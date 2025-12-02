document.addEventListener("DOMContentLoaded", () => {

    const modal = document.getElementsByClassName('wrapper')[0];
    const openModalBtn = document.getElementsByClassName('crear-subasta')[0];
    const closeModalBtn = document.getElementById('close-modal');

    if (!modal) {
        console.error("Modal not found in DOM.");
        return;
    }

    // Función para abrir el modal
    function openModal() {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Evita scroll
    }

    // Función para cerrar el modal
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = ''; // Permite scroll
    }

    // Abrir modal
    if (openModalBtn) {
        openModalBtn.addEventListener('click', openModal);
    }

    // Cerrar modal
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }

    // Cerrar al hacer clic fuera del contenido
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Cerrar con ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.style.display === 'flex') {
            closeModal();
        }
    });

    // Inicialmente oculto
    modal.style.display = 'none';
});
