<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button type="button" class="btn btn-primary">Add Product</button>
                    <table id="productdatatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Product Line</th>
                            <th>Vendor</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Data will be populated here by DataTables -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
