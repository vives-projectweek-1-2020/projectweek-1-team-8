<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        
        User::create(
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'age' => $request->age,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]
        );
    }
}
