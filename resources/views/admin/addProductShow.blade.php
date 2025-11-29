@include('admin.nav-vect')
<div class="text-center text-white w-3/4 h-screen mx-10">
      <a class="text-3xl font-bold"  href="">E-Market Dz</a>
      <p class="text-sm font-bold">add a product</p>
      <div class="bg-slate-300 ">
          <form>
   
                <label class="block">
                    <span class="block text-sm font-bold text-slate-700"> name product </span>
                    <input type="text" class="peer p-2 text-black"/>
                </label>   
                <label>
   
                    <span class="block text-sm font-bold text-slate-700"> price</span>
                    <input type="number" class="peer p-2  text-black"/>
                </label>    
                <label>
  
                    <span class="block text-sm font-bold text-slate-700">description</span>
                    <textarea class="peer p-2  text-black"></textarea>
                </label>    
                <label for="">
                    <span class="block text-sm font-bold text-slate-700">image</span>
                    <input type="file" class="peer p-2  text-black"/>
                  </label>
                  <br>
                  
                  <label>
                    <button class="rounded-null bg-sky-700 text-sm font-bold p-2" type="submit"> add a product</button>
                
                   </label>
                  
          </form>
       </div>
 