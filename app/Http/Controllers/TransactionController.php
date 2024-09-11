<?php

// app/Http/Controllers/TransactionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // app/Http/Controllers/TransactionController.php
    public function dashboard()
    {
        $transactions = DB::table('transactions')->orderBy('date', 'DESC')->get();

        // Extracting data for the chart
        $transaction_dates = $transactions->pluck('date');
        $transaction_amounts = $transactions->pluck('amount');

        return view('dashboard', [
            'transactions' => $transactions,
            'transaction_dates' => $transaction_dates,
            'transaction_amounts' => $transaction_amounts,
        ]);
    }
}

