<!-- resources/views/transactions/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5" id="view-transactions">
    <h3 class="text-2xl font-bold mb-4">View Transactions</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Category</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->category }}</td>
                    <td class="{{ $transaction->type == 'expense' ? 'text-danger' : 'text-success' }}">
                        {{ $transaction->type == 'expense' ? '-' : '+' }}Rp {{ number_format($transaction->amount, 2, ',', '.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No transactions found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
