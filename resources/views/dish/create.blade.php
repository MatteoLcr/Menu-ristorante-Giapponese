<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <form action="{{route('dish.create')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del piatto</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                        @error('name')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{old('description')}}">
                        @error('name')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}">
                        @error('name')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tag" class="form-label">Tag</label>
                        <select name="tag" id="tag" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Novita</option>
                            <option value="2">Vegan</option>
                            <option value="3">Specialita</option>
                        </select>
                        @error('tag')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="allergeni" class="form-label">Allergeni</label>
                        <select name="allergeni" id="allergeni" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Glutine</option>
                            <option value="2">Lattosio</option>
                            <option value="3">Arachidi</option>
                        </select>
                        @error('allergeni')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-dark">Pubblica</button>

                </form>
            </div>
        </div>
    </div>









</x-layout>