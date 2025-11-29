<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-950">

    <div class="text-center text-white mt-20">
      <a class="text-3xl font-bold"  href="/">E-Market Dz</a>
      <p class="text-sm">Create an account it's simple and quick</p>
      <div class="bg-slate-300">
          <form method="post" action="/Sign-in">
                @csrf
                @if (session('add_client'))
                      <div class="bg-green-500 text-white p-2 rounded mb-3">
                         {{ session('add_client') }}
                      </div>
                @endif

                <label class="block">
                    <span class="block text-sm font-bold text-slate-700">First name </span>
                    <input type="text" name="firstName" class="peer p-2 text-black"/>
                </label>   
                <label>
   
                    <span class="block text-sm font-bold text-slate-700">Family Name</span>
                    <input type="text" name="FamilyName" class="peer p-2  text-black"/>
                </label>    
                <label>
  
                    <span class="block text-sm font-bold text-slate-700">Email</span>
                    <input type="email" name="email" class="peer p-2  text-black"/>
                </label>    
                <label for="">
                    <span class="block text-sm font-bold text-slate-700">password</span>
                    <input type="password" name="password" class="peer p-2  text-black"/>
                  </label>
                  
                  <label>
                    <button class="rounded-null bg-sky-700 text-sm font-bold p-2"type="submit">Sign in</button>
                
                   </label>
                  
          </form>
       </div>
 
      

    </div>


</body>
</html>
