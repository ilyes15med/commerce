@include('admin.nav-vect')

<div class="bg-slate-300  mx-3 mt-14 p-12 w-3/4 h-screen">
    <div>
        <p class="text-3xl font-bold">your invoices</p>
    </div>

<div class="flex space-x-1 grid grid-cols-1 gap-6"> 
    @if($invoices->isEmpty())
    <p class="text-center text-xl text-gray-500">Aucun invoice .</p>
  @else
   @foreach ($invoices as $invoice )
       
   <div class="p-2 bg-amber-300">
    <div class="text-left">
        <p class="text-xl font-bold"> 
        invoice id:{{$invoice->idFacture}}</p>
        Name :<p class="text-red-600">{{$invoice->nameClient}}</p>
        <p>phone :{{$invoice->phone_client}}</p>
        <p>adresse :{{$invoice->Address_client}}</p>
        <p>quantity : {{$invoice->quantity}}</p>
        <p>price :{{$invoice->prix}}</p>
        <p>produit : {{$invoice->product_name}}</p>

        <a href="/admin/invoice/{{$invoice->idFacture}}/produit/{{$invoice->produits_id}}/delete" class="p-1 bg-red-600 hover:bg-red-700">cancel</a>
        <a href="/invoice/pdf/{{$invoice->idFacture}}" class="p-1 bg-sky-700 hover:bg-sky-800">print</a>

    </div>
    



</div>
    @endforeach
    @endif
 

</div>


<div>