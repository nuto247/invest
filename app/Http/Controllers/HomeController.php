<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Addinvest;
use App\Models\User;
use App\Models\Transaction;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();

      

        $transactions = Addinvest::where('uid', Auth::id())->get();

        $totalInvestment = Addinvest::where('uid', Auth::id())->sum('investment_amount');

        $totalWithdrawal = Addinvest::where('uid', Auth::id())->sum('withdrawal_amount');
        

        return view('home', compact('user', 'totalInvestment', 'totalWithdrawal', 'transactions'));
    }
}
