<?php
function tampilSalam($nama)
{
    return "Halo, " . $nama . "!";
}

echo tampilSalam("Putra");

function tambah($a, $b)
{
    return $a + $b;
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

