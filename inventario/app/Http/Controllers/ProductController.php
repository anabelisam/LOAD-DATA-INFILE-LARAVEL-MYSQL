<?php

namespace App\Http\Controllers;
use DB;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts()
    {
        $products = DB::table('productos')->get();
        return view('products', ['productos' => $products]);
    }
}
