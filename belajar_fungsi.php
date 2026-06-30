<?php
// 1. TAHAP MEMBUAT FUNGSI
function hitungDiskon($namaBarang, $hargaAsli, $persenDiskon) {
    $potongan = ($persenDiskon / 100) * $hargaAsli;
    $hargaTotal = $hargaAsli - $potongan;
    
    // Tampilkan hasil ke layar
    echo "Barang: <b>$namaBarang</b><br>";
    echo "Harga Asli: Rp $hargaAsli<br>";
    echo "Diskon: $persenDiskon% (Potongan: Rp $potongan)<br>";
    echo "Harga yang harus dibayar: <b>Rp $hargaTotal</b><br>";
    echo "-----------------------------------------<br>";
} // <--- PASTIKAN ADA TUTUP KURUNG KURAWAL INI!

// 2. TAHAP MEMANGGIL FUNGSI (Ketik di bawah kurung kurawal tutup)
hitungDiskon("Sepatu Running", 500000, 20);
hitungDiskon("Kemeja Kuliah", 150000, 10);
?>