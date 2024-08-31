@extends('layout.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2 class="text-2xl font-bold mb-4"> </h2>
    <form action="add_transaction.php" method="POST" action="">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="date" name="date" class="form-control" required></td>
            <td><input type="text" name="description" class="form-control" required></td>
            <td>
              <select name="category" class="form-control" required>
                <option value="Makanan">Makanan</option>
                <option value="Transportasi">Transportasi</option>
                <option value="Belanja">Belanja</option>
                <option value="kas">Kas</option>
                <option value="internet">Internet</option>
              </select>
            </td>
            <td><input type="number" name="amount" class="form-control" required></td>
            <td><input type="hidden" name="type" value="expense"><button type="submit" class="btn btn-danger">Tambah</button></td>
          </tr>
        </tbody>
      </table>
    </form>

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
    <?php
    // Koneksi database
    include 'koneksi.php';

    // Ambil data transaksi dari database
    $sql_expense = "SELECT * FROM transactions WHERE type = 'expense' ORDER BY date DESC";
    $result_expense = $conn->query($sql_expense);

    if ($result_expense->num_rows > 0) {
      while ($row = $result_expense->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['date'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>" . $row['category'] . "</td>
                <td class='text-danger'>-Rp " . number_format($row['amount'], 2, ',', '.') . "</td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='4'>Tidak ada data pengerluaran</td></tr>";
    }

    $conn->close();
    ?>
  </tbody>
</table>
</div>
</div>
  </main>

@endsection
