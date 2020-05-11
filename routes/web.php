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
    return view('home');
})->name('home-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/contact/all', 'ContactController@allData' )->name('all-messages-page');
Route::get('/contact/{id}', 'ContactController@showContactInfo' )->name('one-message-info-page');
Route::get('/contact/{id}/edit', 'ContactController@editMessage' )->name('one-message-info-edit-page');



Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');
Route::post('/contact/{id}/edit', 'ContactController@editMessageSubmit')->name('message-edit-submit');
Route::get('/contact/{id}/delete', 'ContactController@deleteMessageSubmit')->name('message-delete-submit');

