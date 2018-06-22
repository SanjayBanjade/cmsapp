<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function showLoginForm() {
		return view('auth.login');
	}

	public function authenticate(Request $request)
	{
	    $credentials = $request->only('email', 'password');
	    $remember = true;

	    if (Auth::attempt($credentials, $remember)) {
	        // Authentication passed...
	        return redirect('/dashboard');
	    }
	}
}
