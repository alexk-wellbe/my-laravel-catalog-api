<?php

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contacts', 'PagesController@contacts');

Route::resource('articles', 'ArticlesController');

Route::get('/redirect', function () {
    return response()->file(storage_path('app/') .'Fallout_3_Stickers.jpg');
});

Route::group([
    'as' => 'test.',
    'prefix' => 'test',
    'namespace' => 'Test',
    'middleware' => 'auth'

], function() {
    Route::get('/', 'TestController@index');
    Route::get('/foo', 'TestController@foo');
    Route::get('/bar', 'TestController@bar');

    Route::group([
        'as' => 'more.',
        'prefix' => 'more'

    ], function() {
        Route::get('/', 'TestController@index')->name('index');
        Route::get('/foo', 'TestController@foo')->name('foo');
        Route::get('/bar', 'TestController@bar')->name('bar');
    });

    Route::get('/users/{user}', function (App\User $user) {
        return $user->email;
    });

    Route::get('/profile/{user}', function (App\User $dd) {
        dd($dd);
    });
});

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();
    Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {

        Route::get('/', 'AdminController@index');

        Route::get('dashboard', 'DashboardController@index');

        Route::group(['prefix' => 'catalog'], function () {

            Route::get('/', function() {
                return redirect()->action('Admin\Catalog\ProductsController@index');
            });

            Route::get('products', 'Catalog\ProductsController@index');
            Route::get('products/create', 'Catalog\ProductsController@create');
            Route::get('products/{id}', 'Catalog\ProductsController@show');
            Route::post('products', 'Catalog\ProductsController@store');

            Route::get('categories', 'Catalog\CategoriesController@index');
            Route::get('categories/create', 'Catalog\CategoriesController@create');
            Route::get('categories/{id}', 'Catalog\CategoriesController@show');
            Route::post('categories', 'Catalog\CategoriesController@store');

            Route::get('manufacturers', 'Catalog\ManufacturersController@index');
            Route::get('manufacturers/create', 'Catalog\ManufacturersController@create');
            Route::get('manufacturers/{id}', 'Catalog\ManufacturersController@show');
            Route::get('manufacturers/{id}/edit', 'Catalog\ManufacturersController@edit');
            Route::post('manufacturers', 'Catalog\ManufacturersController@store');
        });
    });
});

Route::get('foo', function() {
    return 'this page only be viewed by managers';
})->middleware('manager');

Route::get('foo/{id}/bar', function($id) {
    $url = route('foo2', ['id' => $id]);
    return $url;
})->name('foo2');

Route::get('bar/{id?}', function($id = 888) {
    return redirect()->route('foo2', ['id' => $id]);
});

Route::get('barfoo/users/{user}', function (App\User $user) {
    return $user->email;
});