
       @vite(['resources/css/header.css', 'resources/js/app.js'])


<div 
    x-transition.opacity
    class="wrapper"
>
    <div 
        x-transition
        class="login_box"
    >

        <!-- Botón cerrar -->
        <button 
            @click="openAuctionModal = false"
            id="close-modal"
        >&times;</button>

        <div class="login-header">
            <span >Registrar Subasta</span>
        </div>

        <!-- FORM -->
        <form class="form-grid" method="POST" action="{{ route('auctions.store') }}" >
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
                <input type="datetime-local" name="end_date" class="input-field" required>
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
                <input type="number" name="starting_price" class="input-field" required>
                <label class="label">Precio Inicial</label>
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
                <button class="input-submit">
                    Registrar Subasta
                </button>
            </div>
        </form>

    </div>
</div>
