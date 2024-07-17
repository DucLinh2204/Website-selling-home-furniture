<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $listProduct = Product::all();
        return ProductResource::collection($listProduct);
    }

    public function detail_admin($id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }

    public function category_admin($id)
    {
        $listProduct = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return ProductResource::collection($listProduct);
    }
}
