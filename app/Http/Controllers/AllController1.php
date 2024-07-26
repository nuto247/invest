<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Addinvest;
use App\Models\User;
use App\Models\Transaction;


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


    public function invest()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('dashboard', compact('user'));
    }


    public function listusers()
    {
        $user = Auth::user();

        $users = User::all();

       // $logos = Logo::firstOrFail();

        return view('listusers', compact('user', 'users' ));
    }



    public function plans(Request $request)

    
    {
        $user = Auth::user();

        

       // $logos = Logo::firstOrFail();

        return view('plans', compact('user'));
    }


    public function adddetail(Request $request)

    
    {
        $user = Auth::user();

        

       // $logos = Logo::firstOrFail();

        return view('adddetail', compact('user'));
    }


   


    public function confirm()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('confirm', compact('user'));
    }

    public function confirmx()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('confirmx', compact('user'));
    }


    public function withdraw()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('withdraw', compact('user'));
    }

    public function withdraws()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('withdraws', compact('user'));
    }

    public function addinvest()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('addinvest', compact('user'));
    }


 public function store(Request $request)
    {
        $validated = $request->validate([
            'transtype' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'investment_plan' => 'required|string|max:255',
            'crypto_network' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        $transaction = new Transaction();
        $transaction->transtype = $validated['transtype'];
        $transaction->status = $validated['status'];
        $transaction->investment_plan = $validated['investment_plan'];
        $transaction->crypto_network = $validated['crypto_network'];
        $transaction->amount = $validated['amount'];
        $transaction->save();

        return redirect()->route('dashboard')->with('success', 'Investment created successfully.');
    }


    public function investnow()
    {
        $user = Auth::user();

       // $logos = Logo::firstOrFail();

        return view('investnow', compact('user'));
    }


    public function submitinvest(Request $request)
    {

         // Dump and die the request inputs for debugging
         dd($request->all());
         
        $validated = $request->validate([
            'transtype' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'investment_plan' => 'required|string|max:255',
            'crypto_network' => 'required|string|max:255',
            'investment_amount' => 'required|numeric',
        ]);

        $transaction = new Transaction();
        $transaction->transtype = $validated['transtype'];
        $transaction->status = $validated['status'];
        $transaction->investment_plan = $validated['investment_plan'];
        $transaction->crypto_network = $validated['crypto_network'];
        $transaction->investment_amount = $validated['investment_amount'];
        $transaction->save();

        return redirect()->route('dashboard')->with('success', 'Investment created successfully.');
    }

}
