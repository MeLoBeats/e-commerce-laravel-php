<x-app-layout>
    <x-slot name="header">Liste des produits</x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Remove py-8 -->
            <div class="mx-auto container">
                <div class="grid lg:grid-cols-4 gap-5 md:grid-cols-2">
                    @foreach ($products as $product)
                    <!-- Card 1 -->
                    <div tabindex="0" class="focus:outline-none m-2 h-full w-72">
                        <div>
                            <img alt="person capturing an image" src="{{ $product->image }}" tabindex="0" class="focus:outline-none w-full h-44" />
                        </div>
                        <div class="bg-white max-h-56 pb-3">
                            <div class="flex items-center justify-between px-4 pt-4">
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">{!! $product->price !!}</p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $product->name }}</h2>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ $product->description }}</p>
                                <add-to-cart />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>