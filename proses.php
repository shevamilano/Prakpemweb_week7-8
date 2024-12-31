<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $HP = $_POST['HP'];
    $angkatan = $_POST['angkatan'];
    $gender = $_POST['gender'];
    $jabatan1 = $_POST['jabatan1'];
    $jabatan2 = $_POST['jabatan2'];
    $alasan = $_POST['alasan'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran Anggota</title>
</head>
<body>
    <h1>Data Pendaftaran Anggota Himpunan Mahasiswa Ilmu Komputer</h1>

    <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
    <p><strong>NIM:</strong> <?php echo htmlspecialchars($nim); ?></p>
    <p><strong>Nomor HP:</strong> <?php echo htmlspecialchars($HP); ?></p>
    <p><strong>Angkatan:</strong> <?php echo htmlspecialchars($angkatan); ?></p>
    <p><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Jabatan Pilihan 1:</strong> <?php echo htmlspecialchars($jabatan1); ?></p>
    <p><strong>Jabatan Pilihan 2:</strong> <?php echo htmlspecialchars($jabatan2); ?></p>
    <p><strong>Alasan Anda Harus Diterima:</strong> <?php echo nl2br(htmlspecialchars($alasan)); ?></p>

    <a href="index.html">Kembali ke Form Pendaftaran</a>
</body>
</html>
