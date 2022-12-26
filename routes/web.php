<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    // Home 
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        // Register
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register');
        //Login
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login');
    });

   
    
    Route::group(['middleware' => ['auth', 'permission']], function() {
        //Logout Routes
        Route::get('/logout', 'LogoutController@logout')->name('logout');

        // User Routes
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        // Products

        Route::group(['prefix' => 'products'], function() {
            Route::get('/', 'ProductsController@index')->name('products.index');
            Route::get('/create', 'ProductsController@create')->name('products.create');
            Route::post('/create', 'ProductsController@store')->name('products.store');
            Route::get('/{product}/show', 'ProductsController@show')->name('products.show');
            Route::get('/{product}/edit', 'ProductsController@edit')->name('products.edit');
            Route::patch('/{product}/update', 'ProductsController@update')->name('products.update');
            Route::delete('/{product}/delete', 'ProductsController@destroy')->name('products.destroy');
        });
        // Categorias
        Route::group(['prefix' => 'categories'], function() {
            Route::get('/', 'CategoriesController@index')->name('categories.index');
            Route::get('/create', 'CategoriesController@create')->name('categories.create');
            Route::post('/create', 'CategoriesController@store')->name('categories.store');
            Route::get('/{category}/show', 'CategoriesController@show')->name('categories.show');
            Route::get('/{category}/edit', 'CategoriesController@edit')->name('categories.edit');
            Route::patch('/{category}/update', 'CategoriesController@update')->name('categories.update');
            Route::delete('/{category}/delete', 'CategoriesController@destroy')->name('categories.destroy');
        });
        // Marcas 
        Route::group(['prefix' => 'brands'], function() {
            Route::get('/', 'BrandsController@index')->name('brands.index');
            Route::get('/create', 'BrandsController@create')->name('brands.create');
            Route::post('/create', 'BrandsController@store')->name('brands.store');
            Route::get('/{brand}/show', 'BrandsController@show')->name('brands.show');
            Route::get('/{brand}/edit', 'BrandsController@edit')->name('brands.edit');
            Route::patch('/{brand}/update', 'BrandsController@update')->name('brands.update');
            Route::delete('/{brand}/delete', 'BrandsController@destroy')->name('brands.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});