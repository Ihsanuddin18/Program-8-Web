<?php
class Calculator {
    // Metode untuk operasi penambahan
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Metode untuk operasi pengurangan
    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    // Metode untuk operasi perkalian
    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    // Metode untuk operasi pembagian
    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Tidak dapat membagi oleh nol.";
        } else {
            return $num1 / $num2;
        }
    }
}

// Membuat objek dari kelas Calculator
$calculator = new Calculator();

// Contoh penggunaan metode-metode perhitungan
$hasil_penambahan = $calculator->add(10, 5);
$hasil_pengurangan = $calculator->subtract(10, 5);
$hasil_perkalian = $calculator->multiply(10, 5);
$hasil_pembagian = $calculator->divide(10, 5);

// Menampilkan hasil perhitungan
echo "Hasil Penambahan: " . $hasil_penambahan . "<br>";
echo "Hasil Pengurangan: " . $hasil_pengurangan . "<br>";
echo "Hasil Perkalian: " . $hasil_perkalian . "<br>";
echo "Hasil Pembagian: " . $hasil_pembagian . "<br>";
?>
