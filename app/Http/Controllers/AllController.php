<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AllController extends Controller
{
    //
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    public function dashboard()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('dashboard', compact('user'));
    }


    public function plans()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('plans', compact('user'));
    }
}
