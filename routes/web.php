<?php
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TransferController;
use App\Http\Controllers\Admin\TransferController as AdminTransferController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('', function(){
    return view('home.index');
});

//20de ekledim deneme
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/addtotransfer/{id}', [HomeController::class, 'addtotransfer'])->name('addtotransfer');


//Route::get('/test/{id}/{name}',[HomeController::class,'test'])->where(['id'=>'[0-9])+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test');


//admin
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {

        Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

        Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

        //Product
        Route::prefix('product')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
        });

        //Message
        Route::prefix('message')->group(function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin_messages');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_messages_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        //Product Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        #setting
        Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
        Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

        #Transfer Admin
        Route::prefix('transfer')->group(function () {
            Route::get('/', [AdminTransferController::class, 'index'])->name('admin_transfers');
            Route::get('list/{status}', [AdminTransferController::class, 'list'])->name('admin_transfer_list');
            Route::post('create', [AdminTransferController::class, 'create'])->name('admin_transfer_add');
            Route::post('store', [AdminTransferController::class, 'store'])->name('admin_transfer_store');
            Route::get('edit/{id}', [AdminTransferController::class, 'edit'])->name('admin_transfer_edit');
            Route::post('update/{id}', [AdminTransferController::class, 'update'])->name('admin_transfer_update');
            Route::post('itemupdate/{id}', [AdminTransferController::class, 'itemupdate'])->name('user_transfer_item_update');
            Route::get('delete/{id}', [AdminTransferController::class, 'destroy'])->name('admin_transfer_delete');
            Route::get('show/{id}', [AdminTransferController::class, 'show'])->name('admin_transfer_show');
        });

        #User
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('add', [\App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });
});

//User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function() {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function() {

    Route::get('user/profile', [UserController::class, 'index'])->name('userprofile');

    #transfer
    Route::prefix('transfer')->group(function (){
        Route::get('/', [TransferController::class, 'index'])->name('user_transfers');
        Route::post('create', [TransferController::class, 'create'])->name('user_transfer_create');
        Route::post('store', [TransferController::class, 'store'])->name('user_transfer_store');
        Route::get('edit/{id}', [TransferController::class, 'edit'])->name('user_transfer_edit');
        Route::post('update/{id}', [TransferController::class, 'update'])->name('user_transfer_update');
        Route::get('delete/{id}', [TransferController::class, 'destroy'])->name('user_transfer_delete');
        Route::get('show/{id}', [TransferController::class, 'show'])->name('user_transfer_show');
    });
});





//Admin login control
Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

