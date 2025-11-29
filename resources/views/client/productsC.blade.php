@include('client.header')
<div class="mt-12 text-white pl-5 ">
<p class="text-2xl  font-bold">Product</p>
<p class="text-xl ">choose or search for the product you wont</p>
<div class="mt-1.5">
    <form action="" method="GET" class="flex items-center">
        <input type="text" name="bare-search" placeholder="Rechercher..."
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

<div class="mt-7 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                          <a href="/products/c/product/show" class="bg-white rounded-2xl shadow-md overflow-hidden active:bg-cyan-200">
                             
                                  
                                   
                                   
                                    <div class="space-y-0.5">
                                      
                                    <img src="{{ asset('/assets/images/HP-250G8-1.png') }}" alt="pc" class="w-full h-64 md:h-full object-cover">
     
                                     
                                       
                                                <p class="p-0.5 text-2xl text-black line-clamp-3">
                                                    Pc portable HP 250G8
                                                 
                                                </p> 
                                                <p class="p-0.5 text-xl text-black line-clamp-3 text-bold">
                                                238000.00 DZD
                                                 
                                                </p> 
                                           
                                     
                                          

                                                
                               
                                               
                                                <p class="text-red-500 p-0.5">see more</p>
                                    
                                     
                                    </div>

                                
                                     
                                 
                             
                            </a>    
                        
</div>
        




</div>