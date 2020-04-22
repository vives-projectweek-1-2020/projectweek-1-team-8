<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = auth()->attempt($credentials);

        if (! $token) {
            return response(null, 401);
        } else {
            return response()->json(
                [
                    'token' => $token
                ]
            );
        }
    }
}
