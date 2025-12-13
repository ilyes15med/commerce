
@include('client.header')

<div class="min-h-screen bg-gray-100 flex justify-center items-start p-6">
    
    <!-- Card container -->
    <div class="bg-white rounded-xl shadow-lg flex flex-col md:flex-row max-w-4xl w-full overflow-hidden">
        
        <!-- Image -->
        <div class="md:w-1/2">
            
            <img src="{{ asset('storage/'.$produit->image) }}" alt="{{ $produit->nameProduit }}" class="min-w-full min-h-24 object-cover rounded-lg shadow">
                   
                          
        </div>

        <!-- Details -->
        <div class="md:w-1/2 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold mb-2">
                    {{$produit->nameProduit}}
                </h2>
                <p class="text-xl text-gray-800 mb-4">
                    {{$produit->price}} DZD
                </p>
                <p class="text-gray-600 mb-4">
                    {{$produit->description}} 
                </p>
                <p class="text-black mb-4">
                Quantity:{{$produit->number}}
                </p>

            </div>
            <div class="flex flex-col space-y-4">
               
            </div>

            <div class="flex flex-col space-y-4">
               <!-- Button -->
                <button onclick="showForm()" href="" class="text-center bg-black text-white rounded-lg py-2 px-4 hover:bg-gray-800 transition-colors">Buy</button>
            </div>
        </div>
    </div>    
      
</div>

<div id="infoPersonnel" class="hidden fixed top-20 left-1/2 -translate-x-1/2 
            w-1/2 max-h-[80vh] overflow-y-auto
            p-6 bg-white rounded-xl shadow-xl">
    <form method="post" action="/products/c/product/show/{{$produit->id}}/bye">        
        @csrf

        <h2 class="text-lg font-bold mb-4">Personal Information</h2>

        <label class="block mb-3">
            <span class="text-sm font-bold">Name</span>
            <input type="text" name="Name" class="w-full p-2 border rounded mt-1" required>
        </label>

        <label class="block mb-3">
            <span class="text-sm font-bold">Birth Date</span>
            <input type="date" name="birthDate" class="w-full p-2 border rounded mt-1" required>
        </label>

        <label class="block mb-3">
            <span class="text-sm font-bold">Phone Number</span>
            <input type="text" name="phone" class="w-full p-2 border rounded mt-1" required>
        </label>

        <label class="block mb-3">
            <span class="text-sm font-bold">Address(Street)</span>
            <input type="text" name="address" class="w-full p-2 border rounded mt-1" required>
        </label>
        

        <label class="block mb-3">
            <span class="text-sm font-bold">product</span>
            <input type="text" name="product_name" class="w-full p-2 border rounded mt-1" value="{{$produit->nameProduit}}" disabled>
        </label>
        <label class="block mb-3">
            <span class="text-sm font-bold">Quantity</span>
            <input type="number"  name="quantity" id="quantity" oninput="updatePrice()" min="1" max="{{$produit->number}}" class="w-20 p-2 border rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" >
            
        </label>
        <label class="block mb-3">
            <span class="text-sm font-bold">Price</span>
            <input type="text" id="price" name="prix_product" class="w-full p-2 border rounded mt-1" value="{{$produit->price}}" readonly>
        </label>



        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg mt-2 hover:bg-blue-700">
            Submit
        </button>
         <button onclick="cancellation()" class="bg-red-500 text-white px-4 py-2 rounded-lg mt-2 hover:bg-red-600">
            cancel
        </button>
    </form>
</div>
  

<script>
        function showForm() {
             document.getElementById("infoPersonnel").classList.remove("hidden");
        }
        function cancellation(){
             document.getElementById("infoPersonnel").classList.add("hidden");
        }
        function updatePrice(){
            const price={{$produit->price}};
            let quantity= document.getElementById("quantity").value;
            let priceTotal=price * quantity;
            document.getElementById("price").value = priceTotal;


        }


</script>    