<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf; // استدعاء المكتبة

class InvoiceController extends Controller{
    //
    public function invoices(){
        $invoices = DB::table('invoices')
    ->join('produits', 'invoices.produits_id', '=', 'produits.id')
    ->select(
        'invoices.idFacture',
        'invoices.nameClient',
        'invoices.quantity',
        'invoices.prix',
        'invoices.produits_id',
        'invoices.phone_client',
        'invoices.Address_client',

        'produits.nameProduit as product_name',
      
        
    )
    ->get();


        return view('client.invoiceC',['invoices'=>$invoices]);


    }

    public function invoices_Admin(){
        $invoices = DB::table('invoices')
    ->join('produits', 'invoices.produits_id', '=', 'produits.id')
    ->select(
        'invoices.idFacture',
        'invoices.nameClient',
        'invoices.quantity',
        'invoices.prix',
        'invoices.produits_id',
        'invoices.phone_client',
        'invoices.Address_client',

        'produits.nameProduit as product_name',
      
        
    )
    ->get();


        return view('admin.invoice',['invoices'=>$invoices]);


    }

    public function delete($idinvoice,$idProduit){
        $invoice = DB::table('invoices')
        ->join('produits', 'invoices.produits_id', '=', 'produits.id')
        ->select(
            'invoices.idFacture',
            'invoices.nameClient',
            'invoices.quantity',
            'invoices.prix',
            'invoices.phone_client',
            'invoices.Address_client',
            'produits.nameProduit as product_name'
        )
        ->where('invoices.idFacture', $idinvoice)
        ->first();

        DB::table('produits')->where('id', $idProduit)->increment('number',$invoice->quantity);
       

        DB::table('invoices')->where('idFacture',$idinvoice)->delete();
        return $this->invoices();

    }
    
    public function delete_admin($idinvoice,$idProduit){
        $invoice = DB::table('invoices')
        ->join('produits', 'invoices.produits_id', '=', 'produits.id')
        ->select(
            'invoices.idFacture',
            'invoices.nameClient',
            'invoices.quantity',
            'invoices.prix',
            'invoices.phone_client',
            'invoices.Address_client',
            'produits.nameProduit as product_name'
        )
        ->where('invoices.idFacture', $idinvoice)
        ->first();

        DB::table('produits')->where('id', $idProduit)->increment('number',$invoice->quantity);
       

        DB::table('invoices')->where('idFacture',$idinvoice)->delete();
        return $this->invoices_Admin();

    }
    
   

public function generatePDF($id) {
    $invoice= DB::table('invoices')
        ->join('produits', 'invoices.produits_id', '=', 'produits.id')
        ->select(
            'invoices.idFacture',
            'invoices.nameClient',
            'invoices.quantity',
            'invoices.prix',
            'invoices.phone_client',
            'invoices.Address_client',
            'produits.nameProduit as product_name'
        )
        ->where('invoices.idFacture', $id)
        ->first();

       
    $pdf = Pdf::loadView('client.invoiceShow',['invoice'=>$invoice]);
    
    // تحميل مباشرة
    return $pdf->download('invoice_'.$invoice->idFacture.'.pdf');
    
    // أو للعرض في المتصفح:
    // return $pdf->stream('invoice_'.$invoice->idFacture.'.pdf');
}
public function view($idinvoice){
    $invoice = DB::table('invoices')
    ->join('produits', 'invoices.produits_id', '=', 'produits.id')
    ->select(
        'invoices.idFacture',
        'invoices.nameClient',
        'invoices.quantity',
        'invoices.prix',
        'produits.id',
        'invoices.phone_client',
        'invoices.Address_client',
        'produits.nameProduit as product_name'
    )
    ->where('invoices.idFacture', $idinvoice)
    ->first();
    return view('client.invoiceShow',['invoice'=>$invoice]);



}



}
