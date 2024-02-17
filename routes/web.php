<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route:: get('index', [MainController::class,'homePage'])->name('homePage');
Route:: get('about', [MainController::class,'aboutPage'])->name('about');
Route:: get('blog', [MainController::class,'blogPage'])->name('blog');
Route:: get('contact', [MainController::class,'contactPage'])->name('contact');
Route:: get('listing', [MainController::class,'listingPage'])->name('listing');
Route:: get('single', [MainController::class,'singlePage'])->name('single');
Route:: get('testimonials', [MainController::class,'testimonialsPage'])->name('testimonials');
