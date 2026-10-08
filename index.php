<?php
// index.php

$hasil = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $persediaan_awal = (float) ($_POST["persediaan_awal"] ?? 0);
    $pembelian       = (float) ($_POST["pembelian"] ?? 0);
    $ongkos_angkut   = (float) ($_POST["ongkos_angkut"] ?? 0);
    $retur_pembelian = (float) ($_POST["retur_pembelian"] ?? 0);
    $potongan        = (float) ($_POST["potongan"] ?? 0);
    $persediaan_akhir = (float) ($_POST["persediaan_akhir"] ?? 0);

    // Pembelian Bersih
    $pembelian_bersih = $pembelian + $ongkos_angkut
                      - $retur_pembelian - $potongan;

    // Menghitung HPP
    $hpp = $persediaan_awal + $pembelian_bersih
         - $persediaan_akhir;

    $hasil = [
        "persediaan_awal" => $persediaan_awal,
        "pembelian_bersih" => $pembelian_bersih,
        "persediaan_akhir" => $persediaan_akhir,
        "hpp" => $hpp
    ];
}

// Format Rupiah
function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator HPP Produk</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f3f4f6;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #2563eb;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            margin-top: 30px;
            padding: 20px;
            background: #eff6ff;
            border-radius: 10px;
        }

        .hasil h2 {
            margin-top: 0;
            color: #1d4ed8;
        }

        .hasil-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 15px;
            padding: 15px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: bold;
        }

        .rumus {
            margin-top: 25px;
            padding: 15px;
            background: #f9fafb;
            border-left: 4px solid #2563eb;
        }

        @media (max-width: 600px) {
            .container {
                margin: 15px auto;
                padding: 10px;
            }

            .card {
                padding: 20px;
            }

            .hasil-row,
            .total {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">

        <h1>Kalkulator HPP</h1>
        <p class="subtitle">
            Aplikasi Menghitung Harga Pokok Penjualan Produk
        </p>

        <form method="POST">

            <div class="form-group">
                <label>Persediaan Awal</label>
                <input
                    type="number"
                    name="persediaan_awal"
                    placeholder="Contoh: 5000000"
                    min="0"
                    required
                >
            </div>

            <div class="form-group">
                <label>Pembelian</label>
                <input
                    type="number"
                    name="pembelian"
                    placeholder="Contoh: 10000000"
                    min="0"
                    required
                >
            </div>

            <div class="form-group">
                <label>Ongkos Angkut Pembelian</label>
                <input
                    type="number"
                    name="ongkos_angkut"
                    placeholder="Contoh: 500000"
                    min="0"
                    value="0"
                >
            </div>

            <div class="form-group">
                <label>Retur Pembelian</label>
                <input
                    type="number"
                    name="retur_pembelian"
                    placeholder="Contoh: 300000"
                    min="0"
                    value="0"
                >
            </div>

            <div class="form-group">
                <label>Potongan Pembelian</label>
                <input
                    type="number"
                    name="potongan"
                    placeholder="Contoh: 200000"
                    min="0"
                    value="0"
                >
            </div>

            <div class="form-group">
                <label>Persediaan Akhir</label>
                <input
                    type="number"
                    name="persediaan_akhir"
                    placeholder="Contoh: 4000000"
                    min="0"
                    required
                >
            </div>

            <button type="submit">
                Hitung HPP
            </button>

        </form>

        <?php if ($hasil !== null): ?>

        <div class="hasil">

            <h2>Hasil Perhitungan</h2>

            <div class="hasil-row">
                <span>Persediaan Awal</span>
                <strong>
                    <?= rupiah($hasil["persediaan_awal"]) ?>
                </strong>
            </div>

            <div class="hasil-row">
                <span>Pembelian Bersih</span>
                <strong>
                    <?= rupiah($hasil["pembelian_bersih"]) ?>
                </strong>
            </div>

            <div class="hasil-row">
                <span>Persediaan Akhir</span>
                <strong>
                    <?= rupiah($hasil["persediaan_akhir"]) ?>
                </strong>
            </div>

            <div class="total">
                <span>HPP</span>
                <span>
                    <?= rupiah($hasil["hpp"]) ?>
                </span>
            </div>

        </div>

        <div class="rumus">
            <strong>Rumus:</strong><br><br>

            HPP = Persediaan Awal + Pembelian Bersih − Persediaan Akhir
            <br><br>

            Pembelian Bersih =
            Pembelian + Ongkos Angkut − Retur − Potongan
        </div>

        <?php endif; ?>

    </div>
</div>

</body>
</html>
