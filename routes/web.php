<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'home']);

//page add reviews
Route::get('/add_review', [RestaurantController::class,'redirectToAddReviewPage']);

//page khusus post data restoran
Route::post('/post-add-review',[RestaurantController::class,'AddReviewRestaurant']);


//update
Route::get('/update-review-page/{id}',[RestaurantController::class,'updateReviewPage']);
//khusus update data
Route::post('/update-review/{id}',[RestaurantController::class,'updateReview']);


//delete
Route::post('/delete-review/{id}',[RestaurantController::class,'deleteReview']);

