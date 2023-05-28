<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\panier;
use App\Models\User;
class menuController extends Controller
{



    public function menu()
    {
        return view('pages.menu');
    }
    
    public function show($id){
        $product=product::findOrFail($id);
        return view('pages.form')->with('product',$product);
    }
    public function find($id){
        $product=product::find($id);
        return view('pages.edit')->with('product',$product);
    }
    public function update(Request $request){
        if($request->product_type == 'HOT'){
            $cat=1;
            }
            else{
                           $cat=2;
            }
        $product=product::findOrFail($request->id);
        $product->update([
        $product->name=$request->product_name,
          $product->price=$request->product_price,
          $product->description=$request->product_desc,
          $product->image=$request->product_img,
          $product->id_cat=$cat,
        ]);
        return redirect()->route('edit');
          
    }
    public function create($id){
       $product=product::findOrFail($id);
        return view('pages.deletep')->with('product',$product);
    }

    public function edit()
    {
        $products=DB::table('product')->get();
        $ct=new catController();
        $catg=$ct->index();
        return view('pages.edit',compact('products', 'catg'));
    }
    public function hot()
    {
        
            $products=DB::table('product')->get();
            $ct=new catController();
            $catg=$ct->index();
            return view('pages.hot',compact('products', 'catg'));
    }
    public function ice()
    {
        
            $products=DB::table('product')->get();
            $ct=new catController();
            $catg=$ct->index();
            return view('pages.ice',compact('products', 'catg'));
    }
    public function destroy($id){
        $product=product::findOrFail($id)->delete();
        return redirect()->route('edit');
    }
    public function add_cart(Request $request,$id){
        if(Auth::id()){
                $user=Auth::user();
                $product=product::find($id);
                $panier=new panier();
                $panier->email=$user->email;
                $panier->prd_name=$product->name;
                $panier->prd_price=$product->price*$request->quantity;
                $panier->image=$product->image;
                $panier->user_id=$user->id;
                $panier->product_id=$product->id;
                $panier->user_name=$user->name;
                $panier->quantite=$request->quantity;
                $panier->save();
                return redirect()->back();
            }
            else{
                return redirect('login');
            }
    }
    public function remove_cart($id){
$panier=panier::find($id);
$panier->delete();
return redirect()->back();
    }
}

