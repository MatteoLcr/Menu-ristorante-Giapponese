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
                        @error('description')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}">
                        @error('price')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="categories" class="form-label">Categoria</label>
                        <select name="categories[]" id="categories" class="form-control" multiple>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                        @error('categories')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label for="tag" class="form-label">Tag</label>
                        <select name="tag" id="tag" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="NOVITA">Novita</option>
                            <option value="VEGAN">Vegan</option>
                            <option value="SPECIALITA">Specialita</option>
                        </select>
                        @error('tag')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="allergeni" class="form-label">Allergeni</label>
                        <select name="allergeni" id="allergeni" class="form-select" aria-label="Default select example" multiple>
                            <option selected>Open this select menu</option>
                            <option value="Glutine">Glutine</option>
                            <option value="Lattosio">Lattosio</option>
                            <option value="Arachidi">Arachidi</option>
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