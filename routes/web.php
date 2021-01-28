<?php

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



// Route::get('/', function () {
//     return view('adminlogin');
// });
Route::get('login_admin','Cat_Controller@login');

//Route::get('adminlogin','Prod_Controller@admin_login');
Route::POST('login_new_admin','Cat_Controller@login_new_admin');

// Route::resource('products', 'ProductController');

Route::get('try','Com_Controller@try');

Route::get('dashboard1','Cat_Controller@index');

Route::get('category','Cat_Controller@category');

Route::POST('store','Cat_Controller@store');

Route::get('category/edit/{id}','Cat_Controller@update');

Route::POST('update_data','Cat_Controller@update_data');

Route::get("delete/{id}","Cat_Controller@delete");


Route::get('reports','Prod_Controller@reports');
Route::post('report_such','Prod_Controller@report_such');
// Route::get('dashboard1','Prod_Controller@dashboard1');

Route::get('product','Prod_Controller@product');
Route::POST('store1','Prod_Controller@store1');
Route::get("delete_field/{id}","Prod_Controller@delete_field");

Route::get('product/update/{id}','Prod_Controller@update');
Route::POST('update_field','Prod_Controller@update_field');


Route::get('/company', function () {
    return view('company/company');
});


Route::get('company','Com_Controller@company');
Route::POST('store2','Com_Controller@store2');
Route::get("delete_company/{id}","Com_Controller@delete_company");
Route::get('edit_company/{id}','Com_Controller@update');
Route::POST('update_company','Com_Controller@update_company');

