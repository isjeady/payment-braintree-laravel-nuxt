<?php

namespace App\Http\Controllers\Api\Products;

use Illuminate\Http\Request;
use App\Models\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::all();
        return ProductResource::collection($products);
    }
}
