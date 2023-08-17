<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    public function getProducts(Request $request){
        if($request->category != null && $request->category != ''){
            $products = Products::select('id', 'description', 'price', 'category')->where('category', 'like', '%' . $request->category . '%')->paginate(5);
        }else{
            $products = Products::select('id', 'description', 'price', 'category')->paginate(5);
        }
        
        return response()->json(
            $products
        );
    }
}
