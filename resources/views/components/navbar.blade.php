<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center topNav">
            <a href="{{route('welcome')}}">
                <h1 class="titolone">YOKOCHO</h1>
            </a>
            <h5>ラーメンラ</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center align-items-center subNav">

                <div class="d-flex justify-content-center align-items-center mt-2">
                    <h5 class="material-symbols-outlined pe-1 fs-5 ">ramen_dining</h5>
                    <h5 class="navTextIcon mt-1">FOOD</a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-2 mx-4">
                    <h5 class="material-symbols-outlined pe-1 fs-5">liquor</h5>
                    <h5 class="navTextIcon mt-1">SAKE</a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-2">
                    <h5 class="material-symbols-outlined pe-1 fs-5">local_bar</h5>
                    <h5 class="navTextIcon mt-1">BAR</h5>
                </div>

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