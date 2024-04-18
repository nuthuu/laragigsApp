<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//common Resource Routes;
//index - show all listings
//show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing 

//all listings
Route::get('/',[ListingController::class, 'index']);

//show create form
Route::get('/listings/create',[ListingController::class, 'create']);

///store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'] );

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'] );


///single listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create form
Route::get('/register', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);
