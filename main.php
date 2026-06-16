<?php
function tampilSalam($nama)
{
    $jam = (int) date("H");

    if ($jam >= 5 && $jam < 11) {
        $salam = "Selamat pagi";
    } elseif ($jam >= 11 && $jam < 15) {
        $salam = "Selamat siang";
    } elseif ($jam >= 15 && $jam < 19) {
        $salam = "Selamat sore";
    } else {
        $salam = "Selamat malam";
    }

    return $salam . ", " . $nama . "!";
}

echo tampilSalam("Putra");

function tambah($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Input harus berupa angka";
    }
    $hasil = $a + $b;
    return "Hasil penjumlahan " . $a . " + " . $b . " = " . $hasil;
}
echo tambah(10, 5);

function luasPersegi($sisi)
{
     if ($sisi < 0) {
        return "Sisi tidak boleh negatif";
    }
    return $sisi * $sisi;
}

echo luasPersegi(4);


function cekGenapGanjil($angka)
{
    if ($angka % 2 == 0) {
        return "Genap";
    }

    return "Ganjil";
}

echo cekGenapGanjil(7);

function ubahKapital($teks)
{
    return strtoupper($teks);
}

echo ubahKapital("belajar php");
?>

