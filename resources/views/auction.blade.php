   
   @extends('layouts.app')

@section('title', 'Mercado')

@section('content')
       @vite(['resources/css/auction_styles.css', 'resources/js/app.js'])
   <main class="auction_details">
        <!-- imagen de las vaquitas -->
         <div class="animal_details">
            <img class="moo_picture" src="/img/Vacas-lecheras.png" alt="Subasta de Vacas Lecheras en Rancho El Buen Pastor"/>
            <table class ="animal_table">
                <thead>
                    <tr>                    
                        <th>Sexo</th>
                        <th>Raza</th>
                        <th>Peso</th>
                        <th>Vendedor</th>
                        <th>Lugar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>                  
            </table>            
        </div>
         <!-- detalles de la subasta -->
         <div class="details">
            <div class="auction_name">
                <h1>Subasta de Vacas Lecheras</h1>
                <p>Descripción</p>                
            </div>
            <span>Termina en</span>
            <div class="countdown">
                
                <div class="time-section" id="days">
                    <div class="time-group">
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="time-section" id="hours">
                    <div class="time-group">
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="time-section" id="minutes">
                    <div class="time-group">
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="time-section" id="seconds">
                    <div class="time-group">
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="time-segment">
                            <div class="segment-display">
                                <div class="segment-display-top">0</div>
                                <div class="segment-display-bottom">0</div>
                                <div class="segment-overlay">
                                    <div class="segment-overlay-top">0</div>
                                    <div class="segment-overlay-bottom">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
            <div class="price">
                <span>Puja más reciente</span>
                <h2>$1,200</h2> 
            </div>
            <div class="bid">
                <input type="number" id="bid_amount" name="bid_amount" placeholder="Ingresa tu puja">
                <a class="btn_pujar" href="#">Pujar Ahora</a> 
            </div>
            
         </div>       
    </main>
    @endsection