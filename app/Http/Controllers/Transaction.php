<?php
// app/Http/Controllers/TransactionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        // Ambil data transaksi dari database
        $transactions = DB::table('transactions')->orderBy('date', 'DESC')->get();

        // Tampilkan data ke view
        return view('transactions.index', compact('transactions'));
    }
}
