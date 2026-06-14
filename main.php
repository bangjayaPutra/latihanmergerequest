<?php
function tampilSalam($nama, $waktu = "pagi")
{
    $sapaan = [
        "pagi"  => "Selamat pagi",
        "siang" => "Selamat siang",
        "sore"  => "Selamat sore",
        "malam" => "Selamat malam",
    ];

    $salam = $sapaan[$waktu] ?? "Halo";

    return $salam . ", " . $nama . "! Semoga harimu menyenangkan.";
}

echo tampilSalam("Putra", "pagi");

function tambah($a, $b)
{
    return $a + $b;
}

echo tambah(10, 5);

function luasPersegi($sisi)
{
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

