<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Nisa Motor</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* ====== RESET DAN BODY ====== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    background-image: url('motor.jpg'); /* ganti dengan path gambar kamu */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* ====== CONTAINER ====== */
.container {
    width: 90%;
    max-width: 900px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    overflow: hidden;
    animation: fadeIn 1.2s ease-in-out;
}

/* ====== HEADER ====== */
header {
    background: linear-gradient(135deg, #00416A, #0083B0);
    color: white;
    text-align: center;
    padding: 30px 20px;
}
header h1 {
    font-size: 2.5em;
    letter-spacing: 2px;
    margin-bottom: 8px;
}
header p {
    font-size: 1.1em;
}

/* ====== NAVIGATION ====== */
nav {
    display: flex;
    justify-content: space-around;
    background: #00416A;
    padding: 15px;
    flex-wrap: wrap;
}
nav a {
    color: white;
    text-decoration: none;
    padding: 10px 25px;
    margin: 5px;
    background: #0074D9;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-weight: 500;
}
nav a:hover {
    background: #00A8E8;
    transform: translateY(-3px);
    box-shadow: 0 3px 10px rgba(0,0,0,0.3);
}

/* ====== CONTENT ====== */
.content {
    padding: 40px 30px;
    text-align: center;
}
.content h2 {
    font-size: 1.8em;
    color: #00416A;
    margin-bottom: 15px;
}
.content p {
    font-size: 1.1em;
    color: #333;
    line-height: 1.6;
}

/* ====== FOOTER ====== */
footer {
    text-align: center;
    background: #00416A;
    color: white;
    padding: 15px;
    font-size: 0.9em;
}

/* ====== ANIMATION ====== */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}
</style>
</head>
<body>
<div class="container">
    <header>
        <h1><i class="fa-solid fa-motorcycle"></i> NISA MOTOR</h1>
        <p>Sistem Penjualan Motor Terpadu</p>
    </header>

    <nav>
        <a href="inputdata.php"><i class="fa-solid fa-plus"></i> Input Data Motor</a>
        <a href="transaksi.php"><i class="fa-solid fa-cart-shopping"></i> Transaksi Penjualan</a>
        <a href="laporan.php"><i class="fa-solid fa-file-lines"></i> Laporan Penjualan</a>
    </nav>

    <section class="content">
        <h2>Selamat Datang di Dashboard Nisa Motor</h2>
        <p>Gunakan menu di atas untuk mengelola <b>data motor</b>, melakukan <b>transaksi penjualan</b>, dan melihat <b>laporan hasil penjualan</b>.</p>
    </section>

    <footer>
        © 2025 Nisa Motor | Sistem Informasi Penjualan Motor
    </footer>
</div>
</body>
</html>
