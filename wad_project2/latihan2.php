<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN KELAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5"> 
    <h2>Latihan Kalkulator</h2>

    <form action="latihan3.php" method="get">
    
    <div class="form-group">
        <label for="angka">Angka pertama:</label>
        <input type="number" class="form-control" name="angka_pertama" id="input_angka"  required>
        <label for="angka">Angka kedua :</label>
        <input type="number" class="form-control" name="angka_kedua" id="input_angka"  required>
    </div>

    <div class="form-group">
            <label for="operasi">Operasi:</label>
            <select class="form-control" id="operasi" name="operasi" required>
                <option value="tambah">Tambah</option>
                <option value="kurang">Kurang</option>
                <option value="kali">Kali</option>
                <option value="bagi">Bagi</option>
            </select>
        </div>
        <br> 
    <!-- buatkan 1 button yang bernama hitung -->
        <button type="submit" class="btn btn-primary">Hitung</button>

    </form>
    </div>

<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // buatkan dua input area yang dapat diisi  
    // input pertama berupa angka 
    $angka = $_get["angka"];
    // input kedua berupa dropdown 
    $operasi = $_get["operasi"];

    
    switch ($operasi) {
        case "tambah":
            $hasil = $angka + $angka;
            break;
        case "kurang":
            $hasil = $angka - $angka;
            break;
        case "kali":
            $hasil = $angka * $angka;
            break;
        case "bagi":
            $hasil = $angka / $angka;
            break;
        default:
            $hasil = "Operasi tidak valid";
    }

    // Tampilkan hasil
    echo "Hasil perhitungan: " . $hasil;
}

?>
</body>
</html>

