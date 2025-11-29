<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Market Dz</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-950">
<div class="text-white flex justify-around pt-3.5 ">
          <div class="">
            <a class="font-bold text-xl" href="/products/c">E-Market Dz</a>
          </div>
          <div class="space-x-4 ">
            <a class="font-bold" href="/home/c">Home</a>
            <a class="font-bold" href="/products/c">Products</a>
            <a class="font-bold" href="/invoice/c">orders</a>
            <a class="font-bold" href="/about-us/c">About us</a>
            <a class="font-bold" href="/contact">contact</a>
          </div>
          <div >
          <ul>
                <li>hi {{ session('email_client') }}</li>
                <li><a class="rounded-null p-1 bg-red-600" href="/logout">logout</a></li>
               </ul>
          </div>
</div>
</body>
</html>  