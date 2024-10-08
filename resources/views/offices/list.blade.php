<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offices') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped" id="officedatatable">
                        <thead>
                        <tr>
                            <th>Office Code</th>
                            <th>City</th>
                            <th>Phone</th>
                            <th>Address</th> <!-- Combined Address Column -->
                            <th>Postal Code</th>
                            <th>Territory</th>
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
