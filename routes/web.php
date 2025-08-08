<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('welcome/', function () {
    return view('welcome');
});
Route::get( '/home', [ HomeController::class, 'index' ] )->name( 'home' );
Route::get( '/aboutus', [ HomeController::class, 'about' ] )->name( 'aboutus' );
Route::get( '/contactus', [ HomeController::class, 'contact' ] )->name( 'contactus' );
Route::get( '/service', [ HomeController::class, 'service' ] )->name( 'service' );
