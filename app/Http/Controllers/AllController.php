<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Addinvest;


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

    public function addinvest()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('addinvest', compact('user'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        // Validate the incoming request data
        $request->validate([
            'investment_plan' => 'required|string|max:255',
            'investment_amount' => 'required|numeric|min:0',
            'btc_amount' => 'required|numeric|min:0',
        ]);

        // Create a new investment record
        $investment = new Addinvest();
        $investment->investment_plan = $request->input('investment_plan');
        $investment->investment_amount = $request->input('investment_amount');
        $investment->btc_amount = $request->input('btc_amount');
        $investment->save();

        // Redirect with a success message
        return view('success', compact('user'));
    }
}
