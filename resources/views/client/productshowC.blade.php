
@include('client.header')

<div class="min-h-screen bg-gray-100 flex justify-center items-start p-6">
    <!-- Card container -->
    <div class="bg-white rounded-xl shadow-lg flex flex-col md:flex-row max-w-4xl w-full overflow-hidden">
        
        <!-- Image -->
        <div class="md:w-1/2">
            <img src="{{ asset('/assets/images/HP-250G8-1.png') }}" alt="pc" class="w-full h-64 md:h-full object-cover">
        </div>

        <!-- Details -->
        <div class="md:w-1/2 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold mb-2">PC Portable</h2>
                <p class="text-xl text-gray-800 mb-4">238,000.00 DZD</p>
                <p class="text-gray-600 mb-4">Description du produit ici. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="flex flex-col space-y-4">
                <!-- Number input -->
                <div class="flex items-center space-x-2">
                    <label for="quantity" class="font-medium">Quantity:</label>
                    <input type="number" id="quantity" min="1" max="70" value="1" class="w-20 p-2 border rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Button -->
                <a href="" class="text-center bg-black text-white rounded-lg py-2 px-4 hover:bg-gray-800 transition-colors">Buy</a>
            </div>
        </div>
    </div>
</div>
