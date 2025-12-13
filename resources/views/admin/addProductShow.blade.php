@include('admin.nav-vect')
<div class="text-center text-white w-3/4 h-screen mx-10">
      <a class="text-3xl font-bold"  href="">E-Market Dz</a>
      <p class="text-sm font-bold">add a product</p>
        <div class="bg-slate-300 ">
          <form method="post" action="{{route('add.product')}}" enctype="multipart/form-data" >
            @csrf
   
                <label class="block">
                    <span class="block text-sm font-bold text-slate-700"> name product </span>
                    <input type="text" name="name" class="peer p-2 text-black" required/>
                </label>   
                <label class="block">
                    <span class="block text-sm font-bold text-slate-700 ">category</span>
                    <select name="category" id="" class="text-red-800">
                        <option value="Electronics">Electronics</option>
                        <option value="FC">Fashion & Clothing</option>
                        <option value="HF">Home & Furniture</option>
                        <option value="FG">Food & Grocery</option>
                        <option value="BP">Beauty & Personal Care</option>
                    </select>
                </label>  
                <label>
   
                    <span class="block text-sm font-bold text-slate-700"> price</span>
                    <input type="number" name="price" class="peer p-2  text-black" required/>
                </label>    
                <label>
   
                    <span class="block text-sm font-bold text-slate-700"> number</span>
                    <input type="number" name="nombre" class="peer p-2  text-black" required/>
                </label>   
                <label>
  
                    <span class="block text-sm font-bold text-slate-700">description</span>
                    <textarea class="peer p-2  text-black" name="description" required></textarea>
                </label>    
                <label for="">
                    <span class="block text-sm font-bold text-slate-700">image</span>
                    <input type="file" name="image" class="peer p-2  text-black" required/>
                  </label>
                  <br>
                  
                  <label>
                        <button class="rounded-null bg-sky-700 text-sm font-bold p-2" type="submit"> add a product</button>
                
                   </label>
                  
          </form>
        </div>
 