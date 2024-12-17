<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center topNav">
            <a href="{{route('welcome')}}">
                <h1>YOKOCHO</h1>
            </a>
            <h5>ラーメンラ</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-evenly align-items-center subNav">
                <a>FOOD</a>
                <a>SAKE</a>
                <a>BAR</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-evenly align-items-center">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Register</a>
                <a href="{{route('dish.create')}}">Crea</a>
            </div>
        </div>
    </div>

</div>