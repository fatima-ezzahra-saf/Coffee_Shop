<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aboutController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function showf(){
        $feedback=DB::table('feedback')->get();
        $comments=DB::table('commentaires')->get();
        $replys=DB::table('reply')->get();
        return view('pages.feedback',compact('feedback','comments','replys'));
    }
    
}
