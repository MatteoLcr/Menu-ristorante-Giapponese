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
            @endif

            @if($category->id == 2)
            <div class="col-12 flex-column d-flex justify-content-center mb-5">

                <div class="d-flex flex-column justify-content-start align-items-center mb-4 position-relative categoryBox">
                    <h3 class="title2">{{$category->name}}</h3>
                    <p class="ideogramma2">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-dark">
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
            @endif

            @if($category->id == 3)
            <div class="col-12 flex-column d-flex justify-content-center mb-5 sfondo3">

                <div class="d-flex flex-column justify-content-start align-items-center mb-4 position-relative categoryBox">
                    <h3 class="title3">{{$category->name}}</h3>
                    <p class="ideogramma3">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-dark">
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
            @endif
            


            @endforeach
        </div>
    </div>



</x-layout>