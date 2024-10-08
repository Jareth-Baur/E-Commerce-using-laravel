<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $products[0]->productName }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 detail-holder">
                    <div class="card">
                        <img src="/assets/img/fordmustang.jfif" alt="Product Image" class="image">
                        <div class="info">
                            <h2 class="title">  {{ $products[0]->productName }}</h2>
                            <p class="description">  {{ $products[0]->productDescription }}</p>
                            <p class="product-price">${{ $products[0]->buyPrice }}</p>
                            <button class="button">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
