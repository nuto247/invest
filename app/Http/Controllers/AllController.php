<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Addinvest;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;


class AllController extends Controller
{
    //


    public function updateInvestments()
    {
        $interestRate = 0.086; // 8.6%

        // Run the update process in a loop
        while (true) {
            try {
                // Get all investments with the Bronze plan
                $investments = AddInvest::where('investment_plan', 'Bronze plan')->get();

                foreach ($investments as $investment) {
                    // Calculate the new amount with interest
                    $investment->investment_amount += $investment->investment_amount * $interestRate;
                    $investment->save();
                }

                // Log the success
                Log::info('Investment amounts updated.');

                // Wait for 60 seconds before running again
                sleep(60);
            } catch (\Exception $e) {
                // Log any errors
                Log::error('Error updating investments: ' . $e->getMessage());

                // Sleep for a bit before retrying
                sleep(60);
            }
        }

        // After the loop, return the home view
        return view('home');
    }

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

        $transactions = Addinvest::where('uid', Auth::id())->get();

        $totalInvestment = Addinvest::where('uid', Auth::id())->sum('investment_amount');

        $totalWithdrawal = Addinvest::where('uid', Auth::id())->sum('withdrawal_amount');
        return view('home', compact('user', 'totalInvestment', 'totalWithdrawal', 'transactions'));
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


    public function listusers()
    {
        $user = Auth::user();

        $users = User::all();


        $transactions = Addinvest::with('user:id')->get(['id','uid','investment_type', 'investment_plan', 'investment_amount', 'crypto_network', 'status']);


       // $logos = Logo::firstOrFail();

        return view('listusers', compact('user', 'users','transactions' ));
    }


    public function transedit($id)
    {
        $user = Auth::user();

        $transaction = Addinvest::find($id);

    // Check if the transaction exists
    if (!$transaction) {
        return redirect()->back()->with('error', 'Transaction not found.');
    }

        return view('transedit', compact('user', 'transaction' ));
    }

    public function updateTransaction(Request $request, $id)
{

    $user = Auth::user();

    $users = User::all();


    $transactions = Addinvest::with('user:id')->get(['id','uid', 'investment_plan', 'investment_amount', 'crypto_network', 'status']);

    // Validate the request data
    $request->validate([
        'investment_plan' => 'required|string',
        'crypto_network' => 'required|string',
        'investment_amount' => 'required|numeric|min:100',
        'status' => 'required|string'
    ]);

    // Fetch the specific transaction by its ID
    $transaction = Addinvest::find($id);

    // Check if the transaction exists
    if (!$transaction) {
        return redirect()->back()->with('error', 'Transaction not found.');
    }

    // Update the transaction with the new data
    $transaction->investment_plan = $request->investment_plan;
    $transaction->crypto_network = $request->crypto_network;
    $transaction->investment_amount = $request->investment_amount;
    $transaction->status = $request->status;
    $transaction->save();

    // Redirect back with a success message
    return view('listusers', compact('user', 'users','transactions' ));
}
public function mytrans(Request $request)
{
    $user = Auth::user();

    // Fetch transactions for the authenticated user
    $transactions = Addinvest::where('uid', $user->id)->get();

    $totalInvestment = Addinvest::where('uid', Auth::id())->sum('investment_amount');

    return view('mytrans', compact('user', 'transactions','totalInvestment'));
}

    public function plans(Request $request)

    
    {
        $user = Auth::user();

        

       // $logos = Logo::firstOrFail();

        return view('addinvest', compact('user'));
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

    public function addwithdrawal(Request $request)
    {

 
        //dd($request->all());
        $user = Auth::user();

        // Validate the incoming request data
      


        // Create a new investment record
        $investment = new Addinvest();
        $investment->uid= $user->id;
        $investment->investment_type = $request->input('investment_type');
        $investment->investment_amount = $request->input('investment_amount');
        $investment->crypto_network = $request->input('crypto_network');
        $investment->btc_amount = $request->input('btc_amount');
        $investment->status = $request->input('status');
        $investment->save();

        // Redirect with a success message
        $req=$request;

        $cryptoNetwork = $request->input('crypto_network');

        if ($cryptoNetwork === 'bitcoin') {
            return view('success', compact('user','req'));

        } elseif ($cryptoNetwork === 'usdt_trc20') {
            return view('successusdt', compact('user','req'));
        }

      
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

    public function addinvests(Request $request)
    {

 
        //dd($request->all());
        $user = Auth::user();

        // Validate the incoming request data
      


        // Create a new investment record
        $investment = new Addinvest();
        $investment->uid= $user->id;
        $investment->investment_type = $request->input('investment_type');
        $investment->investment_plan = $request->input('investment_plan');
        $investment->investment_amount = $request->input('investment_amount');
        $investment->crypto_network = $request->input('crypto_network');
        $investment->btc_amount = $request->input('btc_amount');
        $investment->status = $request->input('status');
        $investment->save();

        // Redirect with a success message

        $req=$request;

        $cryptoNetwork = $request->input('crypto_network');

        if ($cryptoNetwork === 'bitcoin') {
            return view('success', compact('user','req'));

        } elseif ($cryptoNetwork === 'usdt_trc20') {
            return view('successusdt', compact('user','req'));
        }

      
    }
    public function withdrawx(Request $request)
    {

 
        //dd($request->all());
        $user = Auth::user();

        // Validate the incoming request data
      


        // Create a new investment record
        $investment = new Addinvest();
        $investment->uid= $user->id;
        $investment->investment_wallet = $request->input('investment_wallet');
        $investment->investment_type = $request->input('investment_type');
        $investment->investment_plan = $request->input('investment_plan');
        $investment->withdrawal_amount = $request->input('withdrawal_amount');
        $investment->crypto_network = $request->input('crypto_network');
        $investment->btc_amount = $request->input('btc_amount');
        $investment->status = $request->input('status');
        $investment->save();

        // Redirect with a success message

        $req=$request;

        $cryptoNetwork = $request->input('crypto_network');

        if ($cryptoNetwork === 'bitcoin') {
            return view('successx', compact('user','req'));

        } elseif ($cryptoNetwork === 'usdt_trc20') {
            return view('successusdtx', compact('user','req'));
        }

      
    }


    public function usdtPage(Request $request)
{

    $user = Auth::user();
    $req=$request;
return view('successusdt', compact('user','req'));
}

public function bitcoinPage(Request $request)
{

    $user = Auth::user();

    $req=$request;

    
return view('success', compact('user','req'));
}


  
}