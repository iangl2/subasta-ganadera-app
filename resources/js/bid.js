document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".btn_pujar");
    const input = document.getElementById("bid_amount");
    const highestBidEl = document.querySelector(".price h2");

    if (!btn) return;

    btn.addEventListener("click", async (e) => {
        e.preventDefault();

        const amount = parseFloat(input.value);
        const auctionId = btn.dataset.auction;

        if (!amount || amount <= 0) {
            alert("Ingresa una cantidad válida");
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

        const data = await response.json();

        if (!data.success) {
            alert(data.message);
            return;
        }

        // Actualiza la puja en pantalla
        highestBidEl.textContent = `$${data.newHighestBid}`;

        input.value = "";
        alert("¡Puja realizada con éxito!");
    });
});
