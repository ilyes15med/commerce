@include('admin.nav-vect')

<div class="bg-slate-300  mx-3 mt-14 p-12 w-3/4 h-screen">
    <div>
        <p class="text-3xl font-bold">your invoices</p>
    </div>

<div class="flex space-x-1 grid grid-cols-1 gap-6"> 
   @foreach ($invoices as $invoice )
       
   
    <a class="p-2 bg-amber-300">
        <div class="text-left">
            <p class="text-xl font-bold"> invoice id:{{$invoice->id}}</p>
            <p>Name :{{$invoice->nameClient}}</p>
            <p>phone :{{$invoice->phone_client}}</p>
            <p>adresse :{{$invoice->Address_client}}</p>
            <p>quantity : {{$invoice->quantity}}</p>
            <p>price :{{$invoice->prix}}</p>
            <p>prouit</p>
    
        </div>
        
   


    </a>
    @endforeach
 

</div>


<div>