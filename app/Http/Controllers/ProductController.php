<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function ajouterProduit(Request $req){
     $nameProduit=$req->name;
     $categorie=$req->category;
     $produitPrice=$req->price;
     $description=$req->description;
    
     $nombreProduitD=$req->nombre;


     $imagepath=null;
      if($req->hasFile('image')){
        $imagepath=$req->file('image')->store('assets','public');
      }
      DB::table('produits')->insert([
        'nameProduit'=>$nameProduit,
        'price'=>$produitPrice,
        'description'=>$description,
        'category' =>$categorie,
        'image'=>$imagepath,
        'number'=>$nombreProduitD,


     ]);

    
     return redirect('/admin/products')->with('success', 'Product added successfully!');
     
    


    }
    //delete produit

    public function deleteProduct($idproduit){




    }

    public function showproduct(){
      $produits = DB::table('produits')->get();
      return view('admin.addProduct',['produits'=>$produits]);

      
    }
    public function product_invité(){
      $produits = DB::table('produits')->where('disponible',true)->get();
      return view('invité.products',['produits'=>$produits]);

      
    }
    public function InvitéindexProduct($id){
      $produit = DB::table('produits')->where('id',$id)->first();
      return view('invité.productShow',['produit'=>$produit]);

      
    }
    //client
    public function product_client(){
      $produits = DB::table('produits')->where('disponible',true)->get();
      return view('client.productsC',['produits'=>$produits]);
 
    }
    
    public function ClientindexProduct($id){
      $produit = DB::table('produits')->where('id',$id)->first();
      return view('client.productshowC',['produit'=>$produit]);

      
    }
      
    public function acheter($idProduit,Request $requete){
      //acheter produit
      //ajouter les produits dans la table invoice
      $nameCli=$requete->Name;
      $birthday=$requete->birthDate;
      $phone=$requete->phone;
      $address=$requete->address;
     // $idProduit=$requete->product_id; 
      $quantity=$requete->quantity;
      $prix=$requete->prix_product;
      DB::table('invoices')->insert([

        'nameClient'=>$nameCli,
        'date_birthday' =>$birthday,
        'Address_client'=>$address,
        'phone_client'=>$phone,
        'quantity'=>$quantity,
        'prix'=>$prix,
        'produits_id'=>$idProduit
      ]);
       


      //decrement le nombre de produit 
      DB::table('produits')->where('id', $idProduit)->decrement('number',$quantity);
      //supprimer le produit 
       $produit=DB::table('produits')->where('id', $idProduit)->first();
      if ($produit->number <= 0) {
        DB::table('produits')->where('id', $idProduit)->update([
          'disponible'=>false
        ]);
        
      }

            

     
      //return
      return redirect('/invoice/c');

    }
    public function search(Request $request){
     $wordSearch= $request->bare_search;
     $produits=  DB::table('produits')->where('nameProduit','LIKE',"%{$wordSearch}%")->get();
     return view('client.productsC',['produits'=>$produits]);

    }
    public function invite_search(Request $request){
      $wordSearch= $request->bare_search;
    $produits=  DB::table('produits')->where('nameProduit','LIKE',"%{$wordSearch}%")->get();
      return view('invité.products',['produits'=>$produits]);
 
     }
    

}
