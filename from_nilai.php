<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hasil Nilai Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Hasil Penilaian</a>
            </div>
        </nav>
    </header>

    <main role="main" class="container mt-3">
        <h3>Hasil Penilaian Siswa</h3>
        <hr />

        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama'];
            $matkul = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

            if ($nilai_total >= 85 && $nilai_total <= 100) {
                $grade = "A";
            } elseif ($nilai_total >= 70 && $nilai_total <= 84) {
                $grade = "B";
            } elseif ($nilai_total >= 56 && $nilai_total <= 69) {
                $grade = "C";
            } elseif ($nilai_total >= 36 && $nilai_total <= 55) {
                $grade = "D";
            } else {
                $grade = "E";
            }

            $status = ($nilai_total > 55) ? "LULUS" : "TIDAK LULUS";

            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'><strong>Nama:</strong> $nama</li>";
            echo "<li class='list-group-item'><strong>Mata Kuliah:</strong> $matkul</li>";
            echo "<li class='list-group-item'><strong>Nilai UTS:</strong> $nilai_uts</li>";
            echo "<li class='list-group-item'><strong>Nilai UAS:</strong> $nilai_uas</li>";
            echo "<li class='list-group-item'><strong>Nilai Tugas/Praktikum:</strong> $nilai_tugas</li>";
            echo "<li class='list-group-item'><strong>Total Nilai:</strong> $nilai_total</li>";
            echo "<li class='list-group-item'><strong>Grade:</strong> $grade</li>";
            echo "<li class='list-group-item'><strong>Status:</strong> $status</li>";
            echo "</ul>";
        } else {
            echo "<div class='alert alert-warning'>Tidak ada data yang dikirim!</div>";
        }
        ?>

        <a href="form_nilai.php" class="btn btn-primary mt-3">Input Lagi</a>

    </main>

    <footer class="mt-5 fixed-bottom">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Develop By @angga &copy;<?= date("Y") ?></a>
            </div>
        </nav>
    </footer>

</body>

</html>
