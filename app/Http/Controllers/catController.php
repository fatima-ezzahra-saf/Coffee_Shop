<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class catController extends Controller
{
    public function index(){
        $cats=DB::table('categories')->get();
        return compact('cats');
    }
}