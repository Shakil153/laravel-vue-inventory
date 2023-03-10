<?php
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('singup', 'AuthController@singup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::apiResource('/employee', 'Api\EmployeeController');
Route::apiResource('/supplier', 'Api\SupplierController');
Route::apiResource('/category', 'Api\CategoryController');
Route::apiResource('/product', 'Api\ProductController');
Route::apiResource('/expense', 'Api\ExpenseController');
Route::apiResource('/customer', 'Api\CustomerController');

Route::Post('/salary/paid/{id}', 'Api\SalaryController@Paid');
Route::Get('/salary', 'Api\SalaryController@AllSalary');

Route::Get('/salary/view/{id}', 'Api\SalaryController@ViewSalary');
Route::Get('/edit/salary/{id}', 'Api\SalaryController@EditSalary');
Route::Post('/salary/update/{id}', 'Api\SalaryController@SalaryUpdate');

Route::Post('/stock/update/{id}', 'Api\ProductController@StockUpdate');

Route::Get('/getproduct/{id}', 'Api\ProductController@getProduct');
Route::Get('/addtocart/{id}', 'Api\CartController@addtocart');
Route::Get('/cartproduct/', 'Api\CartController@cartProduct');
Route::Get('/delete/cartproduct/{id}', 'Api\CartController@deleteCartProduct');
Route::Get('/quantity/increment/{id}', 'Api\CartController@incrementQuantity');
Route::Get('/quantity/decrement/{id}', 'Api\CartController@decrementQuantity');
Route::Get('/vat/', 'Api\CartController@vat');
Route::Post('/orderInsert', 'Api\PosController@OrderDone');