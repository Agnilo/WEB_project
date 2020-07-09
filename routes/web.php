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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/breed/{id}', 'BreedController@show')->name('breed');
Route::get('/animals', 'AnimalsController@index')->name('animals');
Route::get('/add_adopted/{id}', 'AdoptedController@create');
Route::get('/adopted', 'AdoptedController@index');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/admin/animal/update', 'Admin\AnimalUpdateController@update');
Route::post('/animal/create', 'Admin\AnimalCreateController@create');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    Route::get('/update/{id}', 'AnimalUpdateController@show');
    Route::resource('/create', 'AnimalCreateController');
});

//API

Route::get('APIv1/animals/min_years/{min_years?}', function ($min_years = null) {

    if(empty($min_years)){
        $min_years = 0;
    }
    if(!is_int((int)$min_years)){
        return json_encode(["error" => "minimalus amžius turi būti skaičius"]);
    }

    $animals = [];

    foreach (\App\Animal::where('years','>',$min_years)->get() as $animal){
        array_push($animals,[
            "id" => $animal->id,
            "breed_name" => $animal->breed_name,
            "animal_name" => $animal->breed_name,
            "gender" => $animal->gender,
            "neutered" => $animal->neutered,
            "description" => $animal->description,
            "years" => $animal->years,
        ]);
    }

    return json_encode(['animals' => $animals]);
});
