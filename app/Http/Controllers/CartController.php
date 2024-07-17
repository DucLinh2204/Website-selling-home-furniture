<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;

Paginator::useBootstrap();

class CartController extends Controller
{
    public function cart($id = 0) {

        if (!session()->has('cart')) {
            session()->put('cart', []);
        }

        $cart = session()->get('cart');

        if ($id) {
            $product = DB::table('products')
                ->select('id', 'name', 'description', 'short_description', 'price', 'sale_price', 'image', 'category_id')
                ->where('id', '=', $id)
                ->first();

            if ($product) {
                $productArray = (array)$product;
                $productArray['quantity'] = 1;
                $cart[$id] = $productArray;
                session()->put('cart', $cart);
            }
        }

        $categories = DB::table('categories')->select('id', 'name')
            ->orderBy('order', 'asc')
            ->where('hidden_show', '=', '1')
            ->get();

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['sale_price'] * $item['quantity'];
        }

        $data = [
            'cart' => $cart,
            'categories' => $categories,
            'total' => $total
        ];
        return view('page.cart', $data);
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = DB::table('products')->where('id', $productId)->first();

        if (!$product) {
            return response()->json(['error' => 'Không tìm thấy sản phẩm'], 404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'sale_price' => $product->sale_price,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);


        return redirect()->back();
    }

    public function shop( $id = 0) {
        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();

        if ($id == 0) {
            $sp = DB::table('products')
                    ->select('id', 'name', 'price', 'sale_price', 'image')

                    ->paginate(8)
                    ->withQueryString();
        } else {
            $sp = DB::table('products')
                    ->select('id', 'name', 'price', 'sale_price', 'image')
                    ->where('category_id', '=', $id)
                    ->paginate(8)
                    ->withQueryString();
        }

        $data = ['category_id' => $id, 'products' => $sp, 'categories' => $categories];
        return view('page.shop', $data);
    }

    public function detail($id=0){

        $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden_show','=','1')
        ->get();


        $products = DB::table('products')
            ->select('id', 'name', 'description', 'rating', 'instock', 'short_description', 'price','sale_price', 'image', 'category_id')
            ->where('id', '=', $id)
            ->first();


        $products_new = DB::table('products')
            ->select('id', 'name', 'price','sale_price', 'image')
            ->where('category_id', '=', $products->category_id)
            ->limit(4)
            ->get();


        $currentCategories = $categories->firstWhere('id', $products->category_id);

        $data = [
            'id' => $id,
            'products'=> $products,
            'products_new' => $products_new,
            'categories' => $categories,
            'currentCategories' => $currentCategories
        ];

        return view('page.detail', $data);
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return response()->json([], 204);
        }
    }

    function checkout(Request $request){
        $order = new Order();
        $order->user_id = (Auth::check())?Auth::user()->id:null;
        $order->user_fullname = $request->name;
        $order->user_address = $request->address;
        $order->user_email = $request->email;
        $order->user_phone = $request->phone;
        $order->totalPrice = 0;
        $order->totalQuantity = 0;
        $order->save();

        foreach (session('cart') as $sp) {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $sp['id'];
            $order_detail->quantity = $sp['quantity'];
            $order_detail->price = $sp['sale_price'];
            $order_detail->save();

            $order->totalPrice += $order_detail->quantity * $order_detail->price;
            $order->totalQuantity += $order_detail->quantity;
        }
        $order->save();

        session()->forget('cart');

        session()->flash('success', 'Đặt hàng thành công!');

        return redirect()->route('home');
     }
}
