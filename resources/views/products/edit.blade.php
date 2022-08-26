<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica prodotto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors/>
                    <x-success-message />
                    <form method="POST" action="{{ route('products.update',$product) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <x-label for="name" :value="__('Nome prodotto')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" autofocus />
                            </div>
                            <div>
                                <x-label for="description" :value="__('Descrizione')" />
                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $product->description }}"/>
                            </div>
                            <div>
                                <x-label for="category" :value="__('Categoria')" />
                                <select name="category" id="category" class="block mt-1 w-fullbg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option selected>Seleziona una categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{($product->category->id == $category->id ? "selected" : "")}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-label for="quantity" :value="__('Quantità')" />
                                <x-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" value="{{ $product->quantity }}" />
                            </div>
                            <div>
                                <x-label for="price" :value="__('Prezzo di acquisto')" />
                                <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ $product->price }}"  />
                            </div>
                            <div>
                                <x-label for="public_price" :value="__('Prezzo di vendita')" />
                                <x-input id="public_price" class="block mt-1 w-full" type="text" name="public_price" value="{{ $product->public_price }}" />
                            </div>

                            <div>
                                <x-label for="image" :value="__('Immagine')" />
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>


                            <div></div>
                            <div></div>

                            <div>
                                <button class="float-right text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">
                                    {{ __('Salva') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <form action="{{ route('products.destroy',$product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="float-right text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
                            {{ __('Elimina') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
