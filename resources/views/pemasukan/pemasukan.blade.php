@extends('layout.main')

@section('container')
    {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                        $sql_income = "SELECT * FROM transactions WHERE type = 'income' ORDER BY date DESC";
                        $result_income = $conn->query($sql_income);

                        if ($result_income->num_rows > 0) {
                            // Output data untuk setiap baris
                            while ($row = $result_income->fetch_assoc()) {
                                echo "<tr>
                                                            <td>" .
                                    $row['date'] .
                                    "</td>
                                                            <td>" .
                                    $row['description'] .
                                    "</td>
                                                            <td>" .
                                    $row['category'] .
                                    "</td>
                                                            <td class='text-success'>+Rp " .
                                    number_format($row['amount'], 2, ',', ',') .
                                    "</td>
                                                          </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Tidak ada data pemasukan</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main> --}}

@endsection
