<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Belanja Online</h2>
    <div class="row">
        <!-- Kolom Kiri: Form Belanja -->
        <div class="col-md-8">
            <form method="POST" action="form_belanja.php">
                <!-- Input Customer -->
                <div class="mb-3 row">
                    <label for="customer" class="col-sm-3 col-form-label">Customer</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer" required>
                    </div>
                </div>

                <!-- Pilihan Produk -->
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Pilih Produk</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="tv" value="TV" required>
                            <label class="form-check-label" for="tv">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="KULKAS">
                            <label class="form-check-label" for="kulkas">KULKAS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="mesincuci" value="MESIN CUCI">
                            <label class="form-check-label" for="mesincuci">MESIN CUCI</label>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Beli -->
                <div class="mb-3 row">
                    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mb-3 row">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" name="proses" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>

            <!-- Contoh output hasil pengisian form -->
            <div class="mt-4">
                <p><strong>Nama Customer :</strong> Putri Fredlina</p>
                <p><strong>Produk Pilihan :</strong> MESIN CUCI</p>
                <p><strong>Jumlah Beli :</strong> 2</p>
                <p><strong>Total Belanja :</strong> Rp. 7.600.000,-</p>
            </div>
        </div>

        <!-- Kolom Kanan: Daftar Harga -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Daftar Harga
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                </ul>
                <div class="card-footer text-danger text-center">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
