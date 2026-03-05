@include('admin.nav-vect')


<div class="p-6">
@if(session('success'))
    <div class="p-3 mb-4 text-white bg-green-500 rounded">
        {{ session('success') }}
    </div>
@endif

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
            @if($produits->isEmpty())
              <p class="text-center text-gray-500">Aucun product .</p>
            @else
            <tbody class="divide-y divide-gray-200">
                @foreach($produits as $produit)
                <tr class="hover:bg-gray-100 transition">
                    <td class="py-3 px-4">
                        {{$produit->nameProduit}}
                    </td>
                    <td class="py-3 px-4">
                        {{$produit->description}} 
                    </td>
                    <td class="py-3 px-4">
                        {{$produit->price}} 
                    </td>
                    <td class="py-3 px-4">
                    
                        <img src="{{ asset('storage/'.$produit->image) }}" alt="{{ $produit->nameProduit }}" class="min-w-full min-h-24 object-cover rounded-lg shadow">
                   
                       
                    </td>
                    <td class="py-3 px-4"></td>
                </tr>
                    
                @endforeach
                @endif
     
                
        

            </tbody>
        </table>
    </div>

</div>
