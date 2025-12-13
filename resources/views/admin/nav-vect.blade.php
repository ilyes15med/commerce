<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Market Dz</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-blue-950 min-h-screen flex">
    
    <!-- Sidebar -->
    <aside class="w-56 bg-black text-white min-h-screen p-5 space-y-6">
        
        <!-- Logo -->
        <h1 class="text-2xl font-bold mb-6">E-Market DZ</h1>
        <p>Hi {{ session('email_admin')}}</p>

        <!-- Menu -->
        <nav>
            <ul class="space-y-3">
                
                <li>
                    <a href="/admin/products" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/20 transition">
                        <i data-lucide="plus-circle" class="w-5 h-5"></i>
                        Add Product
                    </a>
                </li>

                <li>
                    <a href="/admin/invoices" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/20 transition">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                        Invoice
                    </a>
                </li>

                <li>
                    <a href="/admin/message" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/20 transition">
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                        Message
                    </a>
                </li>
                <li>
                    <a href="/logout" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/20 transition">
                       <i data-lucide="log-out" class="w-5 h-5"></i>
                            logout
                    </a>
               </li>


            </ul>
        </nav>
    </aside>

    <script>
      lucide.createIcons();
    </script>

</body>
</html>
