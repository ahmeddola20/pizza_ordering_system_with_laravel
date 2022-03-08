<?php
use Illuminate\Support\Facades\Route;
use App\Models\Pizza;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
  return view('welcome');
});

Route::get('users/{id}', function ($id) {
    
});
// pizza routes
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'pizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Auth::routes([
  'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
