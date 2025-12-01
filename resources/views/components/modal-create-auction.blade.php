
       @vite(['resources/css/header.css', 'resources/js/app.js'])


<div 
    x-show="openAuctionModal"
    x-transition.opacity
    class="fixed inset-0 z-40 flex justify-center items-center bg-black bg-opacity-50"
>
    <div 
        x-show="openAuctionModal"
        x-transition
        class="wrapper bg-white shadow-xl rounded-lg p-6 relative w-[500px]"
    >

        <!-- Botón cerrar -->
        <button 
            @click="openAuctionModal = false"
            class="absolute right-3 top-3 text-3xl"
        >&times;</button>

        <div class="login-header mb-4">
            <span class="text-xl font-bold">Registrar Subasta</span>
        </div>

        <!-- FORM -->
        <form method="POST" action="{{ route('auctions.store') }}" class="form-grid space-y-4">
            @csrf

            <div class="input_box">
                <input type="text" name="name" class="input-field" required>
                <label class="label">Nombre</label>
            </div>

            <div class="input_box">
                <input type="text" name="description" class="input-field" required>
                <label class="label">Descripción</label>
            </div>

            <div class="input_box">
                <input type="datetime-local" name="start_date" class="input-field" required>
                <label class="label">Fecha</label>
            </div>

            <div class="input_box">
                <input type="text" name="location" class="input-field" required>
                <label class="label">Lugar</label>
            </div>

            <div class="input_box">
                <input type="number" step="0.01" name="weight" class="input-field" required>
                <label class="label">Peso (kg)</label>
            </div>

            <div class="input_box">
                <input type="text" name="breed" class="input-field" required>
                <label class="label">Raza</label>
            </div>

            <div class="input_box">
                <select name="sex" class="input-field" required>
                    <option value="" disabled hidden selected></option>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                </select>
                <label class="label">Sexo</label>
            </div>

            <div class="input_box submit-box">
                <button class="input-submit bg-blue-600 text-white py-2 w-full rounded">
                    Registrar Subasta
                </button>
            </div>
        </form>

    </div>
</div>
