<?php

// app/Http/Controllers/TransactionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        // Ambil data pemasukan
        $incomes = DB::table('transactions')
                    ->where('type', 'income')
                    ->orderBy('date', 'DESC')
                    ->get();

        // Ambil data pengeluaran
        $expenses = DB::table('transactions')
                     ->where('type', 'expense')
                     ->orderBy('date', 'DESC')
                     ->get();

        // Tampilkan data ke view
        return view('transactions.index', compact('incomes', 'expenses'));
    }
}
