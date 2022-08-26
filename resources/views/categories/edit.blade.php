<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors/>
                    <x-success-message />
                    <form method="POST" action="{{ route('categories.update',$category) }}">
                        @method('PATCH')
                        @csrf
                       <div class="grid grid-cols-1 gap-6">
                           <div>
                               <x-label for="name" :value="__('Nome categoria')" />

                               <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $category->name }}" autofocus />
                           </div>

                            <div class="grid grid-cols-2 gap-6">
                                <x-button class="ml-4">
                                    {{ __('Salva') }}
                                </x-button>
                            </div>
                       </div>
                    </form>
                    <form action="{{ route('categories.destroy',$category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button class="ml-4">
                            {{ __('Elimina') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
