<?php
//Website Section Routes
Route::get('/', 'SiteController@index')->name('welcome');
Route::post('/searchOrder', 'SearchController@searchOrder')->name('searchOrder');
Route::post('/searchProduct', 'SearchController@searchProduct')->name('searchProduct');
Route::post('/searchDrug', 'SearchController@searchDrug')->name('searchDrug');
Route::get('/services', 'SiteController@services')->name('services');
Route::get('serviceDetails/{id}', 'SiteController@serviceDetails')->name('serviceDetails');
Route::get('/partners', 'SiteController@partners')->name('partners');
Route::get('/products', 'SiteController@products')->name('products');
Route::get('productShowDetails/{id}', 'SiteController@productShowDetails')->name('productShowDetails');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/contactUs', 'SiteController@contactUs')->name('contactUs');



Auth::routes();
Route::get('/salam@loginGroupon', 'HomeController@index')->name('home');



// CRUD Users Routes
Route::get('/delete/{id}','UserOperationController@destroy');
Route::get('/addUser','UserOperationController@index');
Route::get('/userList','UserOperationController@userList')->name('userList');
Route::get('/blockList','UserOperationController@blockList')->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUserStatus/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');


// Biograph Section Routes
Route::get('/bio', 'BiographyController@index')->name('bio');
Route::post('/addBio', 'BiographyController@store')->name('addBio');
Route::get('/deleteBio/{id}','BiographyController@destroy')->name('deleteBio/{id}');
Route::get('/editBio/{id}','BiographyController@show')->name('editBio/{id}');
Route::post('/editBio/{id}','BiographyController@edit')->name('editBio/{id}');


// Contact Section Routes
Route::post('/SendMessage', 'SendMessageController@store')->name('SendMessage');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/deleteContact/{id}','ContactController@destroy')->name('deleteContact/{id}');


// Order Section Routes
Route::get('order', 'OrderController@index')->name('order');
Route::get('pendingOrders', 'OrderController@pending')->name('pendingOrders');
Route::get('sendOrders', 'OrderController@send')->name('sendOrders');
Route::get('readyOrders', 'OrderController@ready')->name('readyOrders');
Route::get('deliveredOrders', 'OrderController@delivered')->name('deliveredOrders');
Route::post('addOrder', 'OrderController@store')->name('addOrder');
Route::get('deleteOrder/{id}', 'OrderController@destroy')->name('deleteOrder');
Route::get('confirmOrder/{id}', 'OrderController@confirm')->name('confirmOrder');
Route::get('editOrder/{id}', 'OrderController@show')->name('editOrder');
Route::post('updateOrder/{id}', 'OrderController@edit')->name('updateOrder');


// Product Section Routes
Route::get('product', 'ProductController@index')->name('product');
Route::post('addProduct', 'ProductController@store')->name('addProduct');
Route::get('repeatRroduct/{id}', 'ProductController@repeatRroduct')->name('repeatRroduct');
Route::get('productList', 'ProductController@productList')->name('productList');
Route::get('productDetails/{id}', 'ProductController@productDetails')->name('productDetails');
Route::get('deleteProduct/{id}', 'ProductController@destroy')->name('deleteProduct');
Route::get('editProduct/{id}', 'ProductController@show')->name('editProduct');
Route::post('updateProduct/{id}', 'ProductController@edit')->name('updateProduct');


// Service Section Routes
Route::get('service', 'ServiceController@index')->name('service');
Route::post('addService', 'ServiceController@store')->name('addService');
Route::get('deleteService/{id}', 'ServiceController@destroy')->name('deleteService');
Route::get('editService/{id}', 'ServiceController@show')->name('editService');
Route::post('updateService/{id}', 'ServiceController@edit')->name('updateService');


// Company Section Routes
Route::get('company', 'CompanyController@index')->name('company');
Route::post('addCompany', 'CompanyController@store')->name('addCompany');
Route::get('deleteCompany/{id}', 'CompanyController@destroy')->name('deleteCompany');
Route::get('editCompany/{id}', 'CompanyController@show')->name('editCompany');
Route::post('updateCompany/{id}', 'CompanyController@edit')->name('updateCompany');



// Durgs Section Routes
Route::get('drug', 'DrugController@index')->name('drug');
Route::post('addDrug', 'DrugController@store')->name('addDrug');
Route::get('repeatDrug/{id}', 'DrugController@repeatDrug')->name('repeatDrug');
Route::get('drugList', 'DrugController@drugList')->name('drugList');
Route::get('drugDetails/{id}', 'DrugController@drugDetails')->name('drugDetails');
Route::get('deleteDrug/{id}', 'DrugController@destroy')->name('deleteDrug');
Route::get('editDrug/{id}', 'DrugController@show')->name('editDrug');
Route::post('updateDrug/{id}', 'DrugController@edit')->name('updateDrug');
