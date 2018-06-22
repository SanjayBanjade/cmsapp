<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use App\User;

class RegisterController extends Controller
{
    protected $redirectPath = '/dashboard';

    public function showRegistrationForm() {
    	return view('auth.register');
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    protected function create(Request $request) {
    	$this->validator($request->all())->validate();

        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => strtolower($request['email']),
            'password' => password_hash($request['password'], PASSWORD_ARGON2I)
        ]);

        return redirect($this->redirectPath);
    }
}
