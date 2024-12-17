
<x-layout>

    <div class="container">
        <div class="row justify-content-center align-items-center loginCont">
            <form action="{{route('register')}}" class="col-9 rounded px-5 py-4 mt-5 shadow" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    @error('password')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    @error('password_confirmation')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    <button type="submit" class="loginBtn mt-4">Register</button>
                    <div class="mt-2">
                        <span>Already have an account? <a href="{{route('login')}}" class="textOrange">Login</a></span>
                    </div>
                </div>

            </form>

        </div>
    </div>



</x-layout>
