<?php

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

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

Route::middleware(['authenticated'])->group(function() {
	Route::get('/', function () {
	    return view('welcome');
	})->name('welcome');

	Route::get('/login', 'Authentication\LoginController@showLoginForm');
	Route::post('/login', 'Authentication\LoginController@authenticate');

	Route::get('register', 'Authentication\RegisterController@showRegistrationForm');
	Route::post('register', 'Authentication\RegisterController@create');
});

Route::get('/logout', function() {
	Auth::logout();
	return redirect('/');
})->name('logout');

Route::resource('dashboard', 'Dashboard\DashboardController', [
	'names' => [
		'index'=>'dashboard',
		'create'=>'dashcreate'
	]
])->middleware('auth');

Route::view('profile', 'dashboard.profile');
