<?php  
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
Route::bind('product', function($slug){
	return App\Models\Product::where('slug', $slug)->first();
});
Route::get('/', [
	'as' => 'casa',
	'uses' => 'StoreController@index'
]);

Route::get('local', [
	'as' => 'local',
	'uses' => 'StoreController@local'
]);
///////////////////////////////////
Route::get('local{idlocal}', [
	'as' => 'local-producto',
	'uses' => 'StoreController@localproducto'
]);
Route::get('store/products{idlocal}', [
	'as' => 'store-products',
	'uses' => 'ProductsController@index'
]);
Route::get('store/state/{idlocal}', [
	'as' => 'store-state',
	'uses' => 'ProductsController@state'
]);

////////////////////////////////////////////////
Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);
// Carrito -------------

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);
Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);
Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);
Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);
Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);


//aun no se sabe si esto esta bien
/*
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
*/

Route::get('admin/home',function(){
	return view('admin.home');
});

Auth::routes();

Route::get('/home','HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

	//rutas password
	Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});




/*




//Authentication routes...
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);





*/





// Vendedores------
Route::get('seller/show', [
	'as' => 'seller-show',
	'uses' => 'ClienteController@show'
]);


//erick
Route:: resource('store/products','ProductsController');

Route::get('edit/{id}','ProductsController@edit')->name('edit');
Route::post('update/{id}','ProductsController@update')->name('update');
Route::delete('delete/{id}','ProductsController@delete')->name('delete');


Route::get('store/show', [
	'as' => 'store-show',
	'uses' => 'StoreController@localshow'
]);


//erick





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('order-detail', [
	'middleware' => 'auth:admin',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

Route::get('charts','chartController@index');






