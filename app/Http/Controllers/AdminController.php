<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Resources\Product as ProductResources;
use App\Resources\Category as CategoryResources;
use App\Resources\User as UserResources;
class AdminController extends Controller
{
    public static function middleware(): array{
        return ['auth'];
    }
     /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $listOrder = Order::count();
        $listCategory = Category::count();
        $listProduct = Product::count();
        $listUser = User::where('role','user')->count();
        $DanhThu = Order::where('status','success')->sum('totalPrice');

        $listDonHang = Order::orderBy('created_at', 'desc')->limit(5)->get();
        return view('admin.dashboard', compact('listOrder', 'listCategory','listProduct','listUser','DanhThu', 'listDonHang'));
    }
    //san pham
    public function product(){
        $listProduct = Product::paginate(10);
        return view('admin.product', compact('listProduct'));
    }

    public function productAdd(){

        $listCategory = Category::get();
        return view('admin.product_add', compact('listCategory'));
    }

    public function postproductAdd(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->instock = $request->instock;
        $product->category_id = $request->category_id;
        $product->image = '';
        $product->save();

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imgName = "{$product->id}.{$img->getClientOriginalExtension()}";
            $img->move(public_path('images/product/'), $imgName);
            $product->image = $imgName;
            $product->save();
        }

        return redirect()->route('admin.product');
    }

    public function getProductUpdate($id)
    {
        $product = Product::find($id);
        return view('admin.product_update', compact('product'));
    }

    public function postProductUpdate(Request $request, $id)
    {
        $input = $request->all();
        $product = Product::find($id);
        $product->name = $input['name'];
        $product->price = $input['price'];
        $product->sale_price = $input['sale_price'];
        $product->instock = $input['instock'];
        $product->rating = $input['rating'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
        $product->save();

        return redirect()->route('admin.product')->with('success', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        Product::where('id', $id)->delete();
        return response()->json([], 204);
    }
    //danh muc
    public function category(){

        $listCategory = Category::paginate(10);
        return view('admin.category', compact('listCategory'));
    }
    public function categoryAdd(){

        $listCategory = Category::get();
        return view('admin.category_add', compact('listCategory'));
    }
    public function postCategoryAdd(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->order = $request->order;

        $category->save();
        return redirect()->route('admin.category');
    }
    public function getCategoryUpdate($id)
    {
        $category = Category::find($id);
        return view('admin.category_update', compact('category'));
    }

    public function postCategoryUpdate(Request $request, $id)
    {
        $input = $request->all();
        $category = Category::find($id);
        $category->name = $input['name'];
        $category->order = $input['order'];
        $category->hidden_show = $input['hidden_show'];
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }

    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        return response()->json([], 204);
    }

    //tai khoan


    public function user()
    {
        $listUser= User::paginate(10);
        return view('admin.user', compact('listUser'));
    }
    public function userAdd()
    {
        return view('admin.user_add');
    }
    public function postUserAdd(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->job = $request->job;
        $user->sex = $request->sex;

        $user->save();
        return redirect()->route('admin.user');
    }
    public function getuserUpdate($id)
    {
        $user = User::find($id);
        return view('admin.user_update', compact('user'));
    }

    public function postUserUpdate(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        if (!empty($input['password'])) {
            $user->password = Hash::make($input['password']);
        }
        $user->address = $input['address'];
        $user->phone = $input['phone'];
        $user->role = $input['role'];
        $user->job = $input['job'];
        $user->sex = $input['sex'];
        $user->save();

        return redirect()->route('admin.user')->with('success', 'User updated successfully');
    }
    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return response()->json([], 204);
    }

    public function order()
    {
        $listOrder= Order::paginate(10);
        return view('admin.Order', compact('listOrder'));
    }
}
