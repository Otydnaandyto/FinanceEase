@extends('layout.main')

@section('container')


<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<h2></h2>
<div class="table-responsive small">
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
        
      </tbody>
    </table>
  </div>

</div>
</main>
</div>
</div>


@endsection
