<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$product->name}}</h1>
                                    <div class="flex mb-4">
                                        <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Descrizione</a>
                                    </div>
                                    <p class="leading-relaxed mb-4">{{$product->description}}</p>

                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Prezzo di acquisto</span>
                                        <span class="ml-auto text-gray-900">€ {{$product->price}}</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Prezzo di vendita</span>
                                        <span class="ml-auto text-gray-900">€ {{$product->public_price}}</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Margine</span>
                                        <span class="ml-auto text-gray-900">€ {{$product->margin}}</span>
                                    </div>
                                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Quantità</span>
                                        <span class="ml-auto text-gray-900">{{$product->quantity}}</span>
                                    </div>
                                    <div class="flex">

                                        <!-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                                        -->
                                        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"><a href="{{ route('products.edit',$product) }}">Modifica</a></button>
                                    </div>
                                </div>
                                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="/images/{{$product->image}}">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
