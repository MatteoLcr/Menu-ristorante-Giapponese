<x-layout>

    <div class="container">
        <div class="row">
            @foreach($categories as $category)

            @if($category->id == 1)
            <div class="col-12 flex-column d-flex justify-content-center bg-dark">

                <div class="d-flex flex-column justify-content-start align-items-center my-4 position-relative categoryBox">
                    <p class="mt-3 traduzione">[ {{$category->traduzione}} ]</p>
                    <h3 class="title">{{$category->name}}</h3>
                    <p class="ideogramma">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-white" id="dish">
                    <span class="mb-0 tag">{{$dish->tag}}</span>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column titoloDescrizione">
                            <h5 class="dishName mt-1">{{strtoupper($dish->name)}}</h5>
                            <p class="description mb-2">{{$dish->description}}</p>
                            <p class="allergeni"><i class="bi bi-exclamation-triangle me-1"></i> Allergeni: {{$dish->allergeni}}</p>
                        </div>
                        <h5 class="price">{{$dish->price}} €</h5>
                        <button class="heartBtn p-0 ">
                            <i class="bi bi-heart heartIcon"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            @endif


            @if($category->id == 2)
            <div class="col-12 flex-column d-flex justify-content-center mb-5">

                <div class="d-flex flex-column justify-content-start align-items-center mb-4 position-relative categoryBox">
                    <h3 class="title2">{{$category->name}}</h3>
                    <p class="ideogramma2">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-dark" id="dish">
                    <span class="mb-0 tag">{{$dish->tag}}</span>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column titoloDescrizione">
                            <h5 class="dishName mt-1">{{strtoupper($dish->name)}}</h5>
                            <p class="description mb-2">{{$dish->description}}</p>
                            <p class="allergeni"><i class="bi bi-exclamation-triangle me-1"></i> Allergeni: {{$dish->allergeni}}</p>
                        </div>
                        <h5 class="price">{{$dish->price}} €</h5>
                        <button class="heartBtn p-0">
                            <i class="bi bi-heart heartIcon"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            @if($category->id == 3)
            <div class="col-12 flex-column d-flex justify-content-center mb-5 sfondo3">

                <div class="d-flex flex-column justify-content-start align-items-center mb-4 position-relative categoryBox">
                    <h3 class="title3">{{$category->name}}</h3>
                    <p class="ideogramma3">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-dark" id="dish">
                    <span class="mb-0 tag">{{$dish->tag}}</span>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column titoloDescrizione">
                            <h5 class="dishName mt-1">{{strtoupper($dish->name)}}</h5>
                            <p class="description mb-2">{{$dish->description}}</p>
                            <p class="allergeni"><i class="bi bi-exclamation-triangle me-1"></i> Allergeni: {{$dish->allergeni}}</p>
                        </div>
                        <h5 class="price">{{$dish->price}} €</h5>
                        <button class="heartBtn p-0">
                            <i class="bi bi-heart heartIcon"></i>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            @endif



            @endforeach
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center fixed-bottom ">

            <div class="col-12 position-relative d-flex justify-content-center prefers" id="boxPrefe">
                <button class="btnUpArrow position-absolute d-flex justify-content-center" type="button" id="btnUpArrow">
                    <i class="bi bi-chevron-compact-up upArrow"></i>
                </button>
                <div class="d-flex flex-column justify-content-evenly align-items-center" id="piattiAggiunti">

                </div>
            </div>

        </div>
    </div>



    <script>
        let heartBtns = document.querySelectorAll(".heartBtn");
let btnUpArrow = document.querySelector('#btnUpArrow');
let boxPref = document.querySelector('#boxPrefe');
let piattiAggiunti = document.querySelector('#piattiAggiunti'); // Div dove inserire gli elementi selezionati
let selectedItems = new Map(); // Mappa per tracciare gli elementi selezionati (usiamo Map per evitare duplicati)

// Gestione click sui pulsanti cuore
heartBtns.forEach(button => {
    button.addEventListener("click", () => {
        let heartIcon = button.querySelector(".heartIcon");
        let dishElement = button.closest("#dish"); // Elemento piatto completo
        let dishId = dishElement.getAttribute('id') + dishElement.innerHTML; // Chiave unica per il piatto

        // Cambia lo stato dell'icona cuore e aggiorna la lista selezionata
        if (heartIcon.classList.contains("bi-heart-fill")) {
            heartIcon.classList.remove("bi-heart-fill");
            heartIcon.classList.add("bi-heart");

            // Rimuovi il piatto dalla mappa
            selectedItems.delete(dishId);
        } else {
            heartIcon.classList.remove("bi-heart");
            heartIcon.classList.add("bi-heart-fill");

            // Aggiungi il piatto alla mappa
            selectedItems.set(dishId, dishElement.outerHTML);
        }

        // Aggiorna il contenuto del div piatti aggiunti
        updatePiattiAggiunti();
    });
});

// Funzione per aggiornare i piatti aggiunti nel div
function updatePiattiAggiunti() {
    // Controlla se ci sono piatti selezionati
    if (selectedItems.size === 0) {
        piattiAggiunti.innerHTML = '<p class="text-dark mt-3">Nessun elemento selezionato.</p>';
    } else {
        piattiAggiunti.innerHTML = Array.from(selectedItems.values()).join(''); // Inserisce i piatti selezionati
    }

    // Aggiorna la visibilità del box
    toggleBoxVisibility();
}

// Funzione per mostrare/nascondere il contenitore
function toggleBoxPref() {
    if (boxPref.classList.contains('prefers')) {
        boxPref.classList.remove('prefers');
        boxPref.classList.add('prefersOpen');
    } else {
        boxPref.classList.remove('prefersOpen');
        boxPref.classList.add('prefers');
    }

    toggleBoxVisibility();
}

// Funzione per gestire la visibilità del box
function toggleBoxVisibility() {
    if (boxPref.classList.contains('prefersOpen')) {
        boxPref.style.height = '500px'; // Altezza visibile
    } else {
        boxPref.style.height = '0'; // Nasconde il box
    }
}

// Inizializza il pulsante upArrow per il toggle
btnUpArrow.addEventListener('click', toggleBoxPref);

    </script>


</x-layout>