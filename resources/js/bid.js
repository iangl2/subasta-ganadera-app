document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".btn_pujar");
    const input = document.getElementById("bid_amount");
    const highestBidEl = document.querySelector(".price h2");
    const form = document.querySelector("form");

    if (!btn || !form) return;

    // Si no hay data-auction en el botón, intentar extraerlo de la action del form
    const auctionIdFromAction = () => {
        try {
            const m = form.action.match(/\/(\d+)(\/|$)/);
            return m ? m[1] : null;
        } catch {
            return null;
        }
    };

    btn.addEventListener("click", async (e) => {
        e.preventDefault();

        const amount = parseFloat(input.value);
        const auctionId = btn.dataset.auction || auctionIdFromAction();

        if (!amount || amount <= 0) {
            alert("Ingresa una cantidad válida");
            return;
        }

        if (!auctionId) {
            alert("No se pudo identificar la subasta.");
            return;
        }

        const response = await fetch(`/auction/${auctionId}/bid`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ amount })
        });

        if (!response.ok) {
            const errText = await response.text();
            alert("Error en la petición: " + errText);
            return;
        }

        const data = await response.json();

        if (!data.success) {
            alert(data.message || "No se pudo realizar la puja.");
            return;
        }

        // Actualiza la puja en pantalla
        highestBidEl.textContent = `$${data.newHighestBid}`;

        input.value = "";

        // Mostrar confetti temporal
        const wrapper = document.createElement("div");
        wrapper.className = "confetti-wrapper";
        const conf = document.createElement("div");
        conf.className = "confetti";
        wrapper.appendChild(conf);
        document.body.appendChild(wrapper);

        // Remover después de 2s
        setTimeout(() => {
            wrapper.remove();
        }, 2000);

        // Mensaje de éxito (no bloqueante)
        // Puedes mantener alert o mostrar un toast
        // alert("¡Puja realizada con éxito!");
    });
});
