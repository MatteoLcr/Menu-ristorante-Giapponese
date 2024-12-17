<div class="container">
    <div class="row">
        @foreach($dishes as $dish)

        <div class="col-12">
            <p>{{$dish->tag}}</p>
            <h5>{{$dish->name}}</h5>
            <p>{{$dish->description}}</p>
            <p>{{$dish->price}}€</p>
            <p><i class="bi bi-exclamation-triangle me-1"></i> Allergeni:{{$dish->allergeni}}</p>
        </div>


        @endforeach
    </div>
</div>