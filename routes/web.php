<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PopupController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\OhmBytesController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\OhmInsightsController;
use App\Http\Controllers\Admin\BlogcategoryController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\OhmSikauchhaController;
use App\Http\Controllers\Admin\UserRegisterController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DeliveryChargeController;
use App\Http\Controllers\CheckoutController;




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


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
 */


//  Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
//  Route::post('/customer/login', [CustomerLoginController::class, 'login'])->name('customer.login.submit');
//  Route::post('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');
 
//  // Customer dashboard
//  Route::get('/customer/dashboard', function () {
//      return view('customer.dashboard');
//  })->middleware('auth:customer')->name('customer.dashboard');
// Auth::routes();


/*
|--------------------------------------------------------------------------
| Frontend auth Routes
|--------------------------------------------------------------------------
 */

 Route::prefix('customer')->middleware('guest:customer')->group(function () {
    Route::get('login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
    Route::post('login', [CustomerLoginController::class, 'login'])->name('customer.login.submit');

    Route::get('register', [CustomerRegisterController::class, 'showRegisterForm'])->name('customer.register');
    Route::post('register', [CustomerRegisterController::class, 'register'])->name('customer.register.submit');
});

Route::post('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');

Route::middleware('auth:customer')->prefix('customer')->group(function () {
    Route::get('dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});
Route::post('applycoupon', [CartController::class, 'applyCoupon'])->name('coupon');



Route::post('/add-to-cart', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/view-order/checkout/{deliverycharge}', [CheckoutController::class, 'OrderItems'])->name('order.view');

Route::middleware('auth:customer')->group(function () {
    Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
});
Route::get('/confirmation/{order_number}', [CheckoutController::class, 'thankyou'])->name('checkout.thankyou');

Auth::routes(['register' => false]);

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('register', [UserRegisterController::class, 'index'])->name('register');
    Route::post('register', [UserRegisterController::class, 'store'])->name('store.register');

    /*
    |--------------------------------------------------------------------------
    | Change/Update Password Route
    |--------------------------------------------------------------------------
     */

    Route::get('change-password', [AuthController::class, 'index'])->name('profile');
    Route::post('change-password', [AuthController::class, 'store'])->name('change.password');


    /*
    |--------------------------------------------------------------------------
    | Setting Route
    |--------------------------------------------------------------------------
     */

    Route::get('setting', [SettingController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('admin.setting.update');

    /*
    |--------------------------------------------------------------------------
    | Forms Route
    |--------------------------------------------------------------------------
     */

    Route::resource('contacts', ContactsController::class);


    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.delete');
    Route::get('/orders/{order}', [OrderController::class, 'orderItems'])->name('orders.items');
    Route::post('order-status/{order}', [OrderController::class, 'changeOrderStatus'])->name('order.status');
    Route::resource('coupons', CouponController::class);
    Route::resource('delivery', DeliveryChargeController::class);


    /*
    |--------------------------------------------------------------------------
    | Trips Route
    |--------------------------------------------------------------------------
     */

    Route::resource('products', ProductController::class);
    Route::get('products/duplicate/{pkid}', [ProductController::class, 'repli'])->name('products.repli');
    Route::resource('brand', BrandController::class);
    Route::resource('category', CategoryController::class);
    Route::get('admin/category/{id}/subcategories', [CategoryController::class, 'viewSubCategories'])->name('category.subcategories');
    Route::get('admin/category/{parent}/subcategories', [CategoryController::class, 'subcategories'])->name('category.subcategories');
    Route::get('/admin/category/{id}/products', [CategoryController::class, 'products'])->name('category.products');
    Route::resource('division', DivisionController::class);


    /*
    |--------------------------------------------------------------------------
    | Posts/Pages Routes
    |--------------------------------------------------------------------------
     */

    Route::resource('blog', NewsController::class);
    Route::resource('blogcategory', BlogcategoryController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('members', MemberController::class);
    Route::resource('page', PageController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('slider', SlidersController::class);
    Route::resource('videos', VideosController::class);
    Route::resource('counters', CounterController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('bytes', OhmBytesController::class);
    Route::resource('ebook', OhmInsightsController::class);
    Route::resource('sikauchha', OhmSikauchhaController::class);
    Route::resource('advertise', AdvertiseController::class);
    Route::resource('popup', PopupController::class);
    Route::resource('social', SocialController::class);

    

    /*
    |--------------------------------------------------------------------------
    | Media Route
    |--------------------------------------------------------------------------
     */
    Route::resource('media', MediaController::class);
    Route::get('media/delete-file/{media_id}', [MediaController::class, 'mediadestroy'])->name('media.delete');
    Route::get('popupmedia', [MediaController::class, 'mediapopup'])->name('media.popup');
    Route::get('listmedia', [MediaController::class, 'medialist'])->name('media.list');
    Route::get('gallerylistmedia/{id}', [MediaController::class, 'gallerymedialist'])->name('gallery.media.list');

    /*
    |--------------------------------------------------------------------------
    | Menu Routes
    |--------------------------------------------------------------------------
     */
    Route::get('menus/{id?}', [MenuController::class, 'index'])->name('admin.menu.index');
    Route::post('create-menu', [MenuController::class, 'store'])->name('admin.menu.create');

    Route::get('add-post-to-menu', [MenuController::class, 'addPostToMenu'])->name('admin.menu.addpost');
    Route::get('add-page-to-menu', [MenuController::class, 'addPageToMenu'])->name('admin.menu.addpage');
    Route::get('add-service-to-menu', [MenuController::class, 'addServiceToMenu'])->name('admin.menu.addservice');
    Route::get('add-product-to-menu', [MenuController::class, 'addProductToMenu'])->name('admin.menu.addproduct');
    Route::get('add-custom-link', [MenuController::class, 'addCustomLink'])->name('admin.menu.addcustom');

    Route::get('update-menu', [MenuController::class, 'updateMenu'])->name('admin.menu.updatemenu');
    Route::post('update-menuitem/{id}', [MenuController::class, 'updateMenuItem'])->name('admin.menu.updateitem');
    Route::get('delete-menuitem/{id}/{key}/{in?}', [MenuController::class, 'deleteMenuItem'])->name('admin.menu.deleteitem');
    Route::get('delete-menu/{id}', [MenuController::class, 'destroy'])->name('admin.menu.deletemenu');
});
Route::get('/invoice', [OrderController::class, 'invoice'])->name('invoice');

require __DIR__ . '/frontend.php';