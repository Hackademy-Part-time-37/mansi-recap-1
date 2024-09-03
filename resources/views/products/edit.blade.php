<x-layout>
    <h1>Modifica Prodotto</h1>
    <form action="{{ route('product.update', ['product' => $product]) }}" method="POST" class="container"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-control">
            <input class="form-control" type="text" name="name" id="name" value="{{ $product->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-control">
            <input class="form-control" type="number" name="quantity" id="quantity" value="{{ $product->quantity }}">
            @error('quantity')
                {{ $message }}
            @enderror
        </div>
        <div class="form-control">
            <input class="form-control" type="text" name="location" id="location" value="{{ $product->location }}">
            @error('location')
                {{ $message }}
            @enderror
        </div>
        <div class="form-control">
            <img width="128" src="{{ Storage::url($product->image) }}" />
            <input class="form-control" type="file" name="image" id="image">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Aggiorna prodotto</button>
    </form>
</x-layout>
