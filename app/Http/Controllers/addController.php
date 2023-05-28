<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Session;

class addController extends Controller
{
    public function add(){
        return view('pages.add');
    }
    public function save(Request $request){
        if($request->product_type==='HOT'){
            $product=new product();
            $product->name=$request->product_name;
            $product->price=$request->product_price;
            $product->image=$request->product_img;
            $product->description=$request->product_desc;
            $product->id_cat=1;
            $product->save();
            Session::put('success','the product had been added');
            return redirect('/add');
        }
        elseif($request->product_type==='COLD'){
                    $product=new product();
                    $product->name=$request->product_name;
                    $product->price=$request->product_price;
                    $product->image=$request->product_img;
                    $product->description=$request->product_desc;
                    $product->id_cat=2;
                    $product->save();
                    Session::put('success','the product had been added');
                    return redirect('/add');
        }
        else{
            return 'erreur';
        }
    }
}

