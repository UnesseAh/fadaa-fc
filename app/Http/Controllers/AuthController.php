<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegisterPage() : View
    {
        return view('auth.register');
    }

    public function showLoginPage() : View
    {
        return view('auth.login');
    }

    public function register(StoreUserRequest $request)
    {
        return $request->validated();
    }
}
