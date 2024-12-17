<x-layout>
    <div class="container">

        <div class="row">
            @foreach($categories as $category)

            @if($category->id == 1)
            <div class="col-12 flex-column d-flex justify-content-center mb-5 bg-dark">

                <div class="d-flex flex-column justify-content-start align-items-center my-4 position-relative categoryBox">
                    <p class="mt-3 traduzione">[ {{$category->traduzione}} ]</p>
                    <h3 class="title">{{$category->name}}</h3>
                    <p class="ideogramma">{{$category->ideogramma}}</p>
                </div>

                @foreach($category->dishes as $dish)
                <div class="col-12 p-2 pe-4 mb-3 text-white">
                    <p class="mb-0 tag">{{$dish->tag}}</p>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column titoloDescrizione">
                            <h5 class="dishName mt-1">{{$dish->name}}</h5>
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
            <div class="col-12 flex-column d-flex justify-content-center mb-5 bg-danger">
                <div class="d-flex flex-column justify-content-start align-items-center mb-4 bg-danger">
                    <p>{{$category->traduzione}}</p>
                    <h3>{{$category->name}}</h3>
                    <p>{{$category->ideogramma}}</p>
                </div>
                @foreach($category->dishes as $dish)
                <div class="col-12 mb-3 bg-warning">
                    <p>{{$dish->tag}}</p>
                    <h5>{{$dish->name}}</h5>
                    <p>{{$dish->description}}</p>
                    <p>{{$dish->price}}€</p>
                    <p><i class="bi bi-exclamation-triangle me-1"></i> Allergeni:{{$dish->allergeni}}</p>
                </div>
                @endforeach
            </div>
            @endif


            @endforeach
        </div>
    </div>



</x-layout>