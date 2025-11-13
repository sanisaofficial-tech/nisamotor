<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
/* ===== RESET ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Poppins', sans-serif;
    background-image: url('motor.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    color: #fff;
    padding: 0;
    overflow-x: hidden;
}

/* ===== NAVBAR ===== */
.navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    padding: 15px;
    background: rgba(0,0,0,0.6);
    box-shadow: 0 0 15px rgba(0,255,255,0.3);
    backdrop-filter: blur(8px);
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar a {
    color: #00ffff;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1em;
    letter-spacing: 0.5px;
    transition: 0.3s;
    padding: 8px 15px;
    border-radius: 8px;
}
.navbar a:hover, .navbar a.active {
    background: rgba(0,255,255,0.2);
    color: #fff;
    box-shadow: 0 0 15px rgba(0,255,255,0.6);
}

/* ===== ANIMASI MOTOR BERGERAK ===== */
.motor-animation {
    position: relative;
    width: 100%;
    height: 80px;
    overflow: hidden;
    margin-bottom: 20px;
}
.motor {
    position: absolute;
    left: -200px;
    top: 10px;
    font-size: 3em;
    color: #00ffff;
    text-shadow: 0 0 20px #00ffff;
    animation: motorRide 5s linear infinite;
}
@keyframes motorRide {
    0% { left: -200px; transform: scaleX(1); }
    40% { transform: scaleX(1); }
    50% { left: 100%; transform: scaleX(-1); }
    90% { transform: scaleX(-1); }
    100% { left: -200px; transform: scaleX(1); }
}

/* ===== TITLE ===== */
h2 {
    text-align: center;
    font-size: 3em;
    font-weight: 700;
    color: #fff;
    text-shadow: 0 0 25px rgba(0,255,255,0.8);
    letter-spacing: 2px;
    animation: fadeDown 1s ease;
    margin-top: 40px;
}
@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== CONTAINER ===== */
.container {
    max-width: 1200px;
    margin: 50px auto;
    display: flex;
    flex-direction: column;
    gap: 50px;
}

/* ===== CARD BASE ===== */
.form-card, .table-card {
    background: rgba(0,0,0,0.6);
    border-radius: 18px;
    padding: 30px;
    border: 1px solid rgba(255,255,255,0.15);
    box-shadow: 0 8px 25px rgba(0,255,255,0.2);
    backdrop-filter: blur(15px);
    animation: fadeUp 1.2s ease;
}
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== FORM ===== */
.form-group { margin-bottom: 20px; }
label {
    font-weight: 600;
    display: block;
    color: #fff;
    margin-bottom: 8px;
}
.input-icon { position: relative; }
.input-icon i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #00ffff;
    font-size: 1.2em;
}
input[type="text"], input[type="number"], select {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.1);
    color: #fff;
    transition: all 0.3s;
}
input::placeholder { color: #aaa; }
input:focus, select:focus {
    border-color: #00ffff;
    box-shadow: 0 0 15px rgba(0,255,255,0.5);
    background: rgba(255,255,255,0.15);
    outline: none;
}

/* ===== BUTTON ===== */
input[type="submit"] {
    background: linear-gradient(90deg, #00ffff, #00ccff);
    color: #000;
    border: none;
    padding: 15px;
    border-radius: 12px;
    font-size: 1.1em;
    font-weight: 700;
    width: 100%;
    cursor: pointer;
    transition: 0.3s;
    letter-spacing: 1px;
    text-transform: uppercase;
    box-shadow: 0 0 20px rgba(0,255,255,0.6);
}
input[type="submit"]:hover {
    transform: translateY(-3px);
    background: linear-gradient(90deg, #00ccff, #00ffff);
    box-shadow: 0 0 40px rgba(0,255,255,0.9);
}

/* ===== MESSAGE ===== */
.message {
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    font-weight: 600;
    margin-bottom: 15px;
}
.success {
    background: rgba(0,255,200,0.15);
    border: 1px solid #00ffcc;
    color: #00ffcc;
}
.error {
    background: rgba(255,0,0,0.15);
    border: 1px solid #ff6666;
    color: #ff6666;
}

/* ===== TABLE ===== */
.table-card h3 {
    text-align: center;
    font-size: 2em;
    color: #00ffff;
    margin-bottom: 20px;
    text-shadow: 0 0 15px rgba(0,255,255,0.6);
}
table {
    width: 100%;
    border-collapse: collapse;
    color: #fff;
}
th, td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}
th {
    background: rgba(0,255,255,0.3);
    color: #000;
    letter-spacing: 1px;
}
tr:nth-child(even) { background: rgba(255,255,255,0.05); }
tr:hover {
    background: rgba(0,255,255,0.15);
    transition: 0.2s;
}
td.price { color: #00ffcc; font-weight: 600; }
td.stok { color: #00bfff; font-weight: 600; }
.no-data {
    text-align: center;
    color: #aaa;
    padding: 20px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    h2 { font-size: 2em; }
    .form-card, .table-card { padding: 20px; }
    th, td { font-size: 0.9em; }
    .navbar { flex-wrap: wrap; gap: 15px; }
}
</style>
</head>
<body>

<!-- ===== NAVBAR DASHBOARD ===== -->
<nav class="navbar">
        <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
        <a href="inputdata.php"><i class="fas fa-database"></i> Input Data</a>
        <a href="transaksi.php" class="active"><i class="fas fa-shopping-cart"></i> Transaksi</a>
        <a href="laporan.php"><i class="fas fa-file-alt"></i> Laporan</a>
    </nav>

<div class="container">
    <div class="motor-animation">
        <div class="motor"><i class="fas fa-motorcycle"></i></div>
    </div>

    <h2><i class="fas fa-chart-line"></i> Laporan Penjualan Sepeda Motor Bekas</h2>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th><i class="fas fa-hashtag"></i> No</th>
                    <th><i class="fas fa-tag"></i> Merk</th>
                    <th><i class="fas fa-cogs"></i> Tipe</th>
                    <th><i class="fas fa-calendar-alt"></i> Tanggal</th>
                    <th><i class="fas fa-boxes"></i> Jumlah</th>
                    <th><i class="fas fa-dollar-sign"></i> Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT t.*, m.merk, m.tipe  
                                           FROM transaksi t 
                                           JOIN motor m ON t.id_motor = m.id_motor  
                                           ORDER BY tanggal DESC");
            $no = 1;
            $grandtotal = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>$no</td>
                            <td>{$row['merk']}</td>
                            <td>{$row['tipe']}</td>
                            <td>{$row['tanggal']}</td>
                            <td>{$row['jumlah']}</td>
                            <td class='price'>Rp " . number_format($row['total'], 0, ',', '.') . "</td>
                          </tr>";
                    $grandtotal += $row['total'];
                    $no++;
                }
                echo "<tr class='grand-total'>
                        <th colspan='5'><i class='fas fa-calculator'></i> Total Penjualan</th>
                        <td>Rp " . number_format($grandtotal, 0, ',', '.') . "</td>
                      </tr>";
            } else {
                echo "<tr><td colspan='6' class='no-data'>Tidak ada data penjualan tersedia.</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
