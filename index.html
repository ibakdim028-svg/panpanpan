<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator HPP</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
            min-height: 100vh;
            padding: 30px 15px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 5px;
        }

        .deskripsi {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
            color: #333;
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
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #1d4ed8;
        }

        .hasil {
            display: none;
            margin-top: 30px;
            background: #eff6ff;
            padding: 20px;
            border-radius: 12px;
        }

        .hasil h2 {
            color: #1d4ed8;
            margin-top: 0;
        }

        .baris {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .total {
            margin-top: 18px;
            padding: 17px;
            background: #2563eb;
            color: white;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            font-size: 21px;
            font-weight: bold;
        }

        .rumus {
            margin-top: 20px;
            padding: 15px;
            background: white;
            border-left: 4px solid #2563eb;
            line-height: 1.6;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .baris,
            .total {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Kalkulator HPP</h1>

    <p class="deskripsi">
        Harga Pokok Penjualan Produk
    </p>

    <div class="input-group">
        <label>Persediaan Awal</label>
        <input type="number" id="persediaanAwal" placeholder="Contoh: 5000000">
    </div>

    <div class="input-group">
        <label>Pembelian</label>
        <input type="number" id="pembelian" placeholder="Contoh: 10000000">
    </div>

    <div class="input-group">
        <label>Ongkos Angkut Pembelian</label>
        <input type="number" id="ongkosAngkut" value="0">
    </div>

    <div class="input-group">
        <label>Retur Pembelian</label>
        <input type="number" id="retur" value="0">
    </div>

    <div class="input-group">
        <label>Potongan Pembelian</label>
        <input type="number" id="potongan" value="0">
    </div>

    <div class="input-group">
        <label>Persediaan Akhir</label>
        <input type="number" id="persediaanAkhir" placeholder="Contoh: 4000000">
    </div>

    <button onclick="hitungHPP()">HITUNG HPP</button>

    <div class="hasil" id="hasil">

        <h2>Hasil Perhitungan</h2>

        <div class="baris">
            <span>Persediaan Awal</span>
            <strong id="hasilAwal"></strong>
        </div>

        <div class="baris">
            <span>Pembelian Bersih</span>
            <strong id="hasilPembelian"></strong>
        </div>

        <div class="baris">
            <span>Persediaan Akhir</span>
            <strong id="hasilAkhir"></strong>
        </div>

        <div class="total">
            <span>HPP</span>
            <span id="hasilHPP"></span>
        </div>

        <div class="rumus">
            <strong>Rumus:</strong><br>
            HPP = Persediaan Awal + Pembelian Bersih
            − Persediaan Akhir
            <br><br>

            Pembelian Bersih =
            Pembelian + Ongkos Angkut − Retur − Potongan
        </div>

    </div>

</div>

<script>
function formatRupiah(angka) {
    return "Rp " + angka.toLocaleString("id-ID");
}

function hitungHPP() {

    let persediaanAwal =
        Number(document.getElementById("persediaanAwal").value) || 0;

    let pembelian =
        Number(document.getElementById("pembelian").value) || 0;

    let ongkosAngkut =
        Number(document.getElementById("ongkosAngkut").value) || 0;

    let retur =
        Number(document.getElementById("retur").value) || 0;

    let potongan =
        Number(document.getElementById("potongan").value) || 0;

    let persediaanAkhir =
        Number(document.getElementById("persediaanAkhir").value) || 0;


    // Menghitung pembelian bersih
    let pembelianBersih =
        pembelian + ongkosAngkut - retur - potongan;


    // Menghitung HPP
    let hpp =
        persediaanAwal + pembelianBersih - persediaanAkhir;


    // Menampilkan hasil
    document.getElementById("hasilAwal").textContent =
        formatRupiah(persediaanAwal);

    document.getElementById("hasilPembelian").textContent =
        formatRupiah(pembelianBersih);

    document.getElementById("hasilAkhir").textContent =
        formatRupiah(persediaanAkhir);

    document.getElementById("hasilHPP").textContent =
        formatRupiah(hpp);

    document.getElementById("hasil").style.display = "block";
}
</script>

</body>
</html>
