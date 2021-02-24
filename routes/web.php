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

Route::get('/', function () {
    return view('welcome');
});
// Route call Controller
Route::get('test', function () {
    return view('test');
});


// Route get
Route::get('User', function() {
    return 'User Screen';
});

Route::get('Product', function() {
    return 'Product Screen';
});

Route::get('News', function() {
    return 'News Screen';
});
// Route có tên cố định
Route::get('Service', function() {
    return 'Service Screen';
});


// Truyền parameters trong route Laravel

// Route động: Mỗi lần truyền đi, sẽ truyền được id
// Truyền đơn id
Route::get('news/{id}', function ($id) {
    return "Bài viết số: ${id}";
});
// Truyền nhiều id
Route::get('news/{id}/category/{categoryId}', function ($id, $categoryId){
    return "Bài viết só: ${id}. Category ID: ${categoryId} ";
});


// Route name: Để cho phía View thẻ a liên kết được với Route
Route::get('users', function () {
    return 'User Screen';
})->name('user');


// Route name có một tham số truyền vào
Route::get('user/{id}', function ($id) {
    return "User ID: ${id}";
})->name('user.show');

// Route name có nhiều tham số truyền vào
Route::get('user/{id}/branch/{branchId}', function ($id, $branchId) {
    return "User ID: ${id} - Chi nhánh ${branchId}";
})->name('user.show.branch');


// Route where: Điêu kiện parameter truyền vào Route
Route::get('user/{id}', function ($id) {
    return "User ID: ${id}";
})->name('user.show'); //-> Where('id', '[0-9a-z]+'); // [0-9]+: Chấp nhận tất cả các số từ 0 đến 9 có xuất hay không cũng được


//Route group sử dụng prefix
Route::group(['prefix' => 'backend'], function (){
    Route::get('user-management', function () {
        return 'User management';
    })->name('backend.user');
    
    Route::get('product-management', function () {
        return 'Product management';
    })->name('backend.product');
    
    Route::get('category-management', function () {
        return 'Category management';
    })->name('backend.category');
    
    Route::get('news-management', function () {
        return 'News management';
    })->name('backend.news');
});


// Route Group với namespace trong Laravel: Thay thế folder chứa các file Controller
// Route::prefix('backend1')->namespace('Backend')->group(function (){
//     Route::get('user', 'UserController@index')->name('backend1.user1');
    
//     Route::get('product', 'ProductController@index')->name('backend1.product1');
    
//     Route::get('category', 'CategoryController@index')->name('backend1.category1');
    
//     Route::get('news', 'NewsController@index')->name('backend1.news1');
// });

Route::group( ['prefix' => 'backend1', 'namespace' => 'Backend'], function (){
    Route::get('user', 'UserController@index')->name('backend1.user1');
    
    Route::get('product', 'ProductController@index')->name('backend1.product1');
    
    Route::get('category', 'CategoryController@index')->name('backend1.category1');
    
    Route::get('news', 'NewsController@index')->name('backend1.news1');
});


// Route Port
Route::group( ['prefix' => 'backend1', 'namespace' => 'Backend'], function (){
    Route::get('user/create', 'UserController@create')->name('backend1.user.create');
    // Phương thức post
    Route::post('user', 'UserController@store')->name('backend1.user.store');
    // Phương thức put
    Route::put('user/update', 'UserController@update')->name('backend1.user.update');
});


// Route Resource và Resource Controller trong laravel, Dùng hàm only để chỉ sử dụng những Method cần thiết
Route::resource('user', 'Backend\UserController1')->only('index', 'create');
