@include('admin.nav-vect')


<div class="p-6">

    <!-- Title -->
    <p class="text-3xl text-white font-bold mb-6">Add a Product</p>
    <a href="/admin/addProductShow" class="p-1 bg-lime-600 m-2.5">add a product</a>

    <!-- Table Container -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white text-gray-800 rounded-lg overflow-hidden shadow-lg">

            <!-- Table Header -->
            <thead class="bg-gray-900 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Product Name</th>
                    <th class="py-3 px-4 text-left">Description</th>
                    <th class="py-3 px-4 text-left">Price</th>
                    <th class="py-3 px-4 text-left">Image</th>
                    <th class="py-3 px-4 text-left">Method</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-gray-200">

                <tr class="hover:bg-gray-100 transition">
                    <td class="py-3 px-4"></td>
                    <td class="py-3 px-4"></td>
                    <td class="py-3 px-4"></td>
                    <td class="py-3 px-4"></td>
                    <td class="py-3 px-4"></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
