<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-950">

<div class="text-center text-white mt-20">
      <a class="text-3xl font-bold" href="/">E-Market Dz</a>
      
      <div class="bg-slate-300">
          <form method="post" action="/login"> 
   
              @csrf
              @if (session('error_login'))
                      <div class="bg-red-500 text-white p-2 rounded mb-3">
                         {{ session('error_login') }}
                      </div>
              @endif
             
   
                <label>
  
                    <span class="block text-sm font-bold text-slate-700">Email</span>
                    <input type="email" name="email" class="peer p-2  text-black"/>
                </label>    
                <label >
                    <span class="block text-sm font-bold text-slate-700">password</span>
                    <input type="password" name="password" class="peer p-2  text-black"/>
                  </label>
                  
                  <label>
                    <button class="rounded-null bg-sky-700 text-sm font-bold p-2" type="submit" >log in</button>
                
                   </label>
                   <label>
                    <p class="text-black">if you don't have  an account</p>
                    <a class="rounded-null bg-green-500 text-sm font-bold p-1" href="/Sign-in"> Create a new account</a>
                
                   </label>
                  
          </form>
       </div>
 
      

    </div>


</body>
</html>
