<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            $redirectTo = 'admin.home';
        }
        else if ($user->hasRole('user')) {
            $redirectTo = 'user.home';
        }
        return redirect()->route($redirectTo);
    }
}
