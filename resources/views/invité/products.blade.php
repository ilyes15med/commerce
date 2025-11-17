@include('layout.header')

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
<div class="mt-1.5">
    <p class="text-slate-500"> aucun product </p>
</div>



</div>