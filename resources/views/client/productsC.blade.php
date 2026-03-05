@include('client.header')
<div class="mt-12 text-white pl-5 ">
<p class="text-2xl  font-bold">Product</p>
<p class="text-xl ">choose or search for the product you wont</p>
<div class="mt-1.5">
    <form action="/products/c/product/search" method="GET" class="flex items-center">
        <input type="text" name="bare_search" placeholder="Rechercher..."
            class="p-2 text-black border border-gray-300 rounded-l-xl focus:outline-none focus:ring-2 focus:ring-blue-500"/>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r-xl hover:bg-blue-700 flex items-center gap-2">
            
            Search
        </button>
    </form>
</div>
<!--<div class="mt-1.5">
    <p class="text-slate-500"> aucun product </p>
</div>
-->


<div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($produits as $produit )

           
   
        
          <a href="/products/c/product/show/{{$produit->id}}" class="bg-white rounded-2xl shadow-md overflow-hidden active:bg-cyan-200">
             
                  
                   
                   
                    <div class="space-y-0.5">
                      
                                <img src="{{asset('storage/'.$produit->image)}}" alt="pc"  class="w-96 h-64 object-cover rounded-lg shadow">
                   
                     
                       
                                <p class="p-1 text-xl text-black line-clamp-3">
                                    {{$produit->nameProduit}}
                                 
                                </p> 
                                <p class="p-1 text-sm text-black line-clamp-3 text-bold">
                                    {{$produit->price}} DZD
                                 
                                </p> 
                           
                     
                          

                                
               
                               
                                <p class="text-red-500 p-1">see more</p>
                    
                     
                    </div>

                
                     
                 
             
            </a>    
    @endforeach    
</div>





</div>