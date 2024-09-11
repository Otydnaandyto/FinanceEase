@extends('layout.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2 class="text-2xl font-bold mb-4"> </h2>
    <form action="add_transaction.php" method="POST" action="">
      <table class="table table-bordered">

      </table>
    </form>

    <h2></h2>
    <div class="table-responsive small">
<div class="container mt-5" id="view-transactions">
<h3 class="text-2xl font-bold mb-4">Lihat Pengeluaran</h3>
{{-- <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Date</th>
      <th>Description</th>
      <th>Category</th>
      <th>Amount</th>
    </tr>
  </thead>

</table> --}}
</div>
</div>
  </main>

@endsection

