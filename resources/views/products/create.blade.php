<x-layout>
    <h1>Crea Prodotto</h1>
    <form action="{{ route('product.store') }}" method="POST" class="container" enctype="multipart/form-data">
        @csrf
        <div class="form-control">
            <input class="form-control" type="text" name="name" id="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-control">
            <input class="form-control" type="number" name="quantity" id="quantity">
            @error('quantity')
                {{ $message }}
            @enderror
        </div>
        <div class="form-control">
            <input class="form-control" type="text" name="location" id="location">
            @error('location')
                {{ $message }}
            @enderror
        </div>

        @foreach ($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $category->name }}
                </label>
            </div>
        @endforeach

        <div class="form-control">
            <input class="form-control" type="file" name="image" id="image">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Salva nuovo prodotto</button>
    </form>
</x-layout>
