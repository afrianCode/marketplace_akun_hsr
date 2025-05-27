<?php include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM akun WHERE id = $id");
$akun = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Akun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Detail Akun #<?php echo $akun['id']; ?></h2>
    <p><strong>Username:</strong> <?php echo $akun['username']; ?></p>
    <p><strong>Password:</strong> <?php echo $akun['password']; ?></p>
    <p><strong>Tipe Akun:</strong> <?php echo $akun['tipe_akun']; ?></p>
    <p><strong>Harga:</strong> Rp <?php echo number_format($akun['harga']); ?></p>
    <p><strong>Deskripsi:</strong><br> <?php echo nl2br($akun['deskripsi']); ?></p>

    <a href="index.php">Kembali ke daftar</a>
</body>
</html>
