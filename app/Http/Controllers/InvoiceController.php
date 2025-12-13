<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller{
    //
    public function invoices(){
        $invoices= DB::table('invoices')->get();
        
        return view('client.invoiceC',['invoices'=>$invoices]);


    }


}
