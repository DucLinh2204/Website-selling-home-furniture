<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


Paginator::useBootstrap();

class HomeController extends Controller
{
    public function home($id=0){
        $sp = DB::table('products')
        ->select('id', 'name', 'price', 'sale_price', 'image')
        ->limit(8)
        ->get();

        $products_hot = DB::table('products')
        ->select('id', 'name', 'price', 'sale_price', 'image')
        ->limit(8)
        ->where('hot','=','1')
        ->get();

        $bannersp = DB::table('products')
        ->select('id', 'name', 'price', 'sale_price', 'image')
        ->limit(4)
        ->get();
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['products'=> $sp, 'products_hot' => $products_hot, 'bannersp' => $bannersp, 'categories' => $categories];
        return view('home', $data);

    }
    public function about($id=0){
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['id' => $id,/*  'products' => $sp,  */'categories' => $categories];
        return view('page.about', $data);
    }
    public function thankyou($id=0){
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['id' => $id,/*  'products' => $sp,  */'categories' => $categories];
        return view('page.thankyou', $data);
    }
    public function blog($id=0){
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['id' => $id,/*  'products' => $sp,  */'categories' => $categories];
        return view('page.blog', $data);
    }
    public function services($id=0){
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['id' => $id,/*  'products' => $sp,  */'categories' => $categories];
        return view('page.services',$data);
    }
    public function contact($id=0){
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        $data = ['id' => $id,/*  'products' => $sp,  */'categories' => $categories];
        return view('page.contact',$data);
    }
}
