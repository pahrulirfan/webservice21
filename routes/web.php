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
Route::group(['prefix' => 'belajar'], function () {

    Route::get('/mahasiswa', function () {
        echo 'Mahasiswa';
    });

    Route::get('/ubg/ilkom/mahasiswa', function () {
        return 'Mahasiswa Ilkom Kampus UBG';
    });

// routing dengan parameter
    Route::get('/ubg/ilkom/mahasiswa/{semester}/{nim}', function ($semester, $nim) {
        return 'Mahasiswa Ilkom Kampus UBG Semester : ' . $semester . ' - NIM : ' . $nim;
    });

    Route::redirect('/login', '/masuk');

//Group route
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/mahasiswa', function () {
            return 'Admin Mahasiswa';
        });
        Route::get('/dosen', function () {
            return 'Admin Dosen';
        });
        Route::get('/pegawai', function () {
            return 'Admin Pegawai';
        });
    });
});


// routing default
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/kontak/{hp?}', function ($hp) {
    return view('kontak', ['handphone' => $hp]);
});

Route::get('/tentang-kami', function () {
    return view('tentang');
});

//CRUD  Data
Route::get('customer', 'CustomerController@index');
Route::get('customer/create', 'CustomerController@create')->name('customer.create');
Route::post('customer/store', 'CustomerController@store')->name('customer.store');
// route model versi laravel 5.8
Route::delete('customer/{id}', 'CustomerController@destroy')->name('customer.delete');
// versi diatas 7
//Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index']);

Route::get('customer/edit/{customer}', 'CustomerController@edit')->name('customer.edit');
Route::patch('customer/update/{customer}', 'CustomerController@update')->name('customer.update');
