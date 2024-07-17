<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;
use App\Mail\GuiEmail;

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/blog', [HomeController::class,'blog'] );
Route::get('/about', [HomeController::class,'about'] );
Route::get('/contact', [HomeController::class,'contact'] );
Route::post("/guilienhe", function(Illuminate\Http\Request $request){
    $arr = request()->post();
    $ht = trim(strip_tags( $arr['ht'] ));
    $em = trim(strip_tags( $arr['em'] ));
    $nd = trim(strip_tags( $arr['nd'] ));
    $adminEmail = 'voduclinh2204@gmail.com'; //Gửi thư đến ban quản trị
    Mail::mailer('smtp')->to( $adminEmail )
    ->send( new GuiEmail($ht, $em, $nd) );
     $request->session()->flash('thongbao', "Đã gửi mail");
     return redirect("thongbao");
  });
Route::get("/thongbao", function(Illuminate\Http\Request $request, $id=0){
    $categories = DB::table('categories')->select('id','name')
        ->orderby('order','asc')
        ->where('hidden/show','=','1')
        ->get();
    $tb = $request->session()->get('thongbao');
    $data = ['id' => $id, 'thongbao' => $tb,  'categories' => $categories];
    return view('page.thongbao', $data);
});
Route::get('/thankyou', [HomeController::class,'thankyou'] );
Route::get('/services', [HomeController::class,'services'] );
//shop
Route::get('/shop/{id}', [CartController::class, 'shop']);
Route::get('/detail/{id}', [CartController::class, 'detail']);

// Cart routes
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');


Route::get('/shop/{id}', [CartController::class,'shop'] );
Route::get('/detail/{id}', [CartController::class,'detail'] );
Route::post('cart', [CartController::class,'checkout'])->name('checkout');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', function(){
        return view('admin');
    })->middleware('auth',Admin::class);
});
//Admin
Route::prefix('admin')->name('admin.')->middleware(Admin::class)->group(function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/product', [AdminController::class, 'product'])->name('product');
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/add', [AdminController::class, 'productAdd'])->name('addProduct');
        Route::post('/add', [AdminController::class, 'postProductAdd']);
        Route::get('/update/{id}', [AdminController::class, 'getProductUpdate'])->name('upProduct');
        Route::post('/update/{id}', [AdminController::class, 'postProductUpdate'])->name('postProductUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteProduct'])->name('delete');
    });
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/add', [AdminController::class, 'categoryAdd'])->name('addCategory');
        Route::post('/add', [AdminController::class, 'postCategoryAdd']);
        Route::get('/update/{id}', [AdminController::class, 'getCategoryUpdate'])->name('upCategory');
        Route::post('/update/{id}', [AdminController::class, 'postCategoryUpdate'])->name('postCategoryUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteCategory'])->name('delete');
    });
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/add', [AdminController::class, 'userAdd'])->name('addUser');
        Route::post('/add', [AdminController::class, 'postUserAdd']);
        Route::get('/update/{id}', [AdminController::class, 'getuserUpdate'])->name('upUser');
        Route::post('/update/{id}', [AdminController::class, 'postUserUpdate'])->name('postUserUpdate');
        Route::delete('/{id}', [AdminController::class, 'deleteUser'])->name('delete');
    });
    Route::get('/order', [AdminController::class, 'order'])->name('order');
});



require __DIR__.'/auth.php';
