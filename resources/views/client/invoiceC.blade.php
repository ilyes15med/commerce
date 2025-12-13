@include('client.header')
<div class="bg-slate-300  mx-3 mt-14 p-12">

<div class="flex space-x-1 grid grid-cols-1 gap-6"> 
    @foreach ($invoices as $invoice )
       
   
    <a class="p-2 bg-amber-300">
        <div class="text-left">
            <p class="text-xl font-bold"> 
                invoice id:{{$invoice->idFacture}}</p>
            Name :<p class="text-red-600">{{$invoice->nameClient}}</p>
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