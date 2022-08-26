<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crea categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors/>
                    <x-success-message />
                    <form method="POST" action="{{ route('products.store') }}">
                        @method('POST')
                        @csrf
                       <div class="grid grid-cols-1 gap-6">
                           <div>
                               <x-label for="name" :value="__('Nome prodotto')" />
                               <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" autofocus />
                           </div>
                           <div>
                               <x-label for="quantity" :value="__('Quantità')" />
                               <x-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" value="{{ old('quantity') }}" />
                           </div>
                           <div>
                               <x-label for="price" :value="__('Prezzo di acquisto')" />
                               <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ old('price') }}"  />
                           </div>
                           <div>
                               <x-label for="public_price" :value="__('Prezzo di vendita')" />
                               <x-input id="public_price" class="block mt-1 w-full" type="text" name="public_price" value="{{ old('public_price') }}" />
                           </div>
                           <div>
                               <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Seleziona una categoria</label>
                               <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                   <option selected>Seleziona una categoria</option>
                                   @foreach ($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                   @endforeach
                               </select>
                           </div>

                            <div class="grid grid-cols-2 gap-6">
                                <x-button class="ml-4">
                                    {{ __('Salva') }}
                                </x-button>
                            </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
