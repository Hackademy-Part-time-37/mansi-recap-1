<x-layout>
    <h1>Lista Prodotti</h1>
    <div class="container">
        <a href="{{ route('product.create') }}">Crea Prodotto</a>
        <ul>
            @foreach ($products as $product)
                <li>
                    <a href="{{ route('product.edit', ['product' => $product]) }}">{{ $product->name }} -
                        {{ $product->quantity }}</a>
                    <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                    {{ $product->user->email }}
                    Categorie Associate
                    @foreach ($product->categories as $category)
                        {{ $category->name }}
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
