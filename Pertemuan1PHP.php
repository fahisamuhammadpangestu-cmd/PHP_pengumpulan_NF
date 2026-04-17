<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas pertemuan 1</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .hasil { margin-top: 20px; padding: 15px; border: 1px solid #ccc; background-color: #f9f9f9; width: 300px; }
    </style>
</head>
<body>

    <h2>Form Input Nilai Ujian</h2>
    <form action="" method="POST">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai_ujian" required><br><br>

        <button type="submit" name="proses">Cek Hasil</button>
    </form>

    <?php

    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai_ujian'];

        // Implementasi Struktur Kendali Percabangan
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        // Tampilkan Output ke Browser 
        echo "<div class='hasil'>";
        echo "<h3>Hasil Pengolahan Data:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";
        echo "Status: <strong>$status</strong>";
        echo "</div>";
    }
    ?>

</body>
</html>