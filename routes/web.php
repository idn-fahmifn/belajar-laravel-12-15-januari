<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\UmurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// basic routing
// routing dengan method get : untuk mengambil atau menampilkan sebuah respon.
Route::get('/profile', function(){
    // respon
    return "Ini adalah respon profile";
})->name('halaman.profile');

// menampilkan respon berupa halaman : 
// Route::get('/contoh', function(){
//     // respon halaman
//     return view('halaman.contoh');
// })->name('halaman.contoh');

Route::get('/contoh', [HalamanController::class, 'halamanContoh'])->name('halaman-contoh');

// routing dengan dynamic parameter.
// parameter yang wajib untuk di didefinisikan pada url web browser.
// Route::get('/mobil/{param}', function($nilai_parameter){
//     return "ini adalah detail mobil " . $nilai_parameter;
// })->name('halaman.mobil');


Route::get('/mobil/{param}', [HalamanController::class, 'mobil'])->name('halaman.mobil');

Route::post('kirim-mobil', [HalamanController::class, 'kirim'])
->name('kirim.mobil');

// parameter opsional, parameternya tidah wajib didefinisikan di url, tapi harus memiliki nilai default.
Route::get('/motor/{param?}', function($nilai = 'honda'){
    $ucapan = "Hallo saya punya sebuah motor ";
    return  $ucapan . $nilai;
})->name('halaman.motor');


// cara menjalankan routing dengan controller resource : 
Route::resource('barang', BarangController::class);


// routing untuk umur
Route::get('form-umur', [UmurController::class, 'formUmur'])->name('form.umur');
Route::post('umur', [UmurController::class, 'proses'])->name('proses.umur');
Route::get('sukses', [UmurController::class, 'sukses'])
->middleware('umur')
->name('sukses.umur');



