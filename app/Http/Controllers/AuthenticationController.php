<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserTypeEnum;
class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->user_type_id == UserTypeEnum::Administrator ) {
                return redirect('/admin/dashboard');
            } elseif ($user->user_type_id == UserTypeEnum::Staff) {
                return redirect('/staff/managepatient');
            }
            // Authentication passed
            return view('/dashboard'); 
        }
        // Authentication failed
        return redirect('/')->with('error', 'Invalid credentials');
    }
}
