<x-layout>


<div class="row">
            <div class="col-12">
                <h3>Search results for: <span class="textOrange">{{$query}}</span></h3>
            </div>
            <div class="col-12">
                @foreach($dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-white">
                    <span class="mb-0 tag">{{$dish->tag}}</span>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column titoloDescrizione">
                            <h5 class="dishName mt-1">{{strtoupper($dish->name)}}</h5>
                            <p class="description mb-2">{{$dish->description}}</p>
                            <p class="allergeni"><i class="bi bi-exclamation-triangle me-1"></i> Allergeni: {{$dish->allergeni}}</p>
                        </div>
                        <h5 class="price">{{$dish->price}} €</h5>
                        <h5 class="material-symbols-outlined">favorite</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



</x-layout>